<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Middleware\IsAdmin;
Use Alert;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth', IsAdmin::class]);
    // }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('kategori.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' =>'required|unique:kategoris',
            'gambar' =>'required|max:2080|mimes:png,jpg',
            'ket' =>'required'
        ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->ket = $request->ket;

        if($request->hasFile('gambar')){
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/kategori/', $name);
            $kategori->gambar = $name;
        }

        $kategori->save();
        return redirect()->route('kategori.index')
        ->with('success','data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kategori = Kategori::FindOrFail($id);
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::FindOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_kategori' => 'required',
            // 'gambar' => 'required',
            'ket' => 'required'
        ]);

        $kategori = Kategori::FindOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->ket = $request->ket;

        if($request->hasFile('gambar')){
            $kategori->deleteImage();
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/kategori/', $name);
            $kategori->gambar = $name;
        }

        $kategori->save();
        return redirect()->route('kategori.index')
        ->with('success', 'data berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::FindOrFail($id);
        $kategori->delete();
        // $siswa->genre()->detach();
        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil dihapus');

    }
}
