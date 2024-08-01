<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
Use Alert;
use App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth', IsAdmin::class]);
    // }

    public function getProdukById($id){
        //menampilkan data berdasarkan
        $produk = Produk::findOrFail($id);
        return view('info', compact('produk'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        confirmDelete("Delete produk", "Are you sure?");
        $produk = Produk::orderBy('id', 'desc')->get();
        $kategori = Kategori::all();
        return view('produk.index', compact('produk', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view('produk.create', compact('produk', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_produk' =>'required',
            'deskripsi' =>'required',
            'harga' =>'required',
            'stok' =>'required',
            'gambar' =>'required|max:2080|mimes:png,jpg',
            'id_kategori' =>'required'
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;

        if($request->hasFile('gambar')){
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/produk/', $name);
            $produk->gambar = $name;
        }

        Alert::success('Success Title', 'Success Message')->autoClose(1000);

        $produk->save();
        return redirect()->route('produk.index')
        ->with('success','data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::FindOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::FindOrFail($id);
        $kategori = Kategori::All();
        $selectKategori = Kategori::with('produk')->pluck('id')->toArray();
        return view('produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_produk' =>'required',
            'deskripsi' =>'required',
            'harga' =>'required',
            'stok' =>'required',
            // 'gambar' =>'required|max:2080|mimes:png,jpg',
            'id_kategori' =>'required'
        ]);

        $produk = Produk::FindOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;

        if($request->hasFile('gambar')){
            $produk->deleteImage();
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/produk/', $name);
            $produk->gambar = $name;
        }

        Alert::success('Success Title', 'Success Message')->autoClose(1000);

        $produk->save();
        // $produk->kategori()->sync($request->kategori);
        return redirect()->route('produk.index')
        ->with('success','data berhasil ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        toast('Your Post as been submited!','success')->autoClose(1000);

        $produk = Produk::FindOrFail($id);
        $produk->delete();
        // $produk->kategori()->detach();
        return redirect()->route('produk.index');
            // ->with('success', 'data berhasil dihapus');

    }
}
