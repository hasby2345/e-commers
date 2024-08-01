<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\User;
use App\Models\Produk;
Use Alert;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailTransaksi = DetailTransaksi::orderBy('id', 'desc')->get();
        $user = User::All();
        $produk = Produk::All();
        return view('detail.index', compact('detailTransaksi', 'user', 'produk'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $detailTransaksi = DetailTransaksi::all();
        $user = User::all();
        $produk = Produk::all();
        return view('detail.create', compact('detailTransaksi', 'user', 'produk'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_user' =>'required',
            'id_produk' =>'required',
            'id_keranjang' =>'required',
        ]);

        $detailTransaksi = new DetailTransaksi();
        $detailTransaksi->id_user = $request->id_user;
        $detailTransaksi->id_produk = $request->id_produk;
        $detailTransaksi->id_keranjang = $request->id_keranjang;

        $detailTransaksi->save();
        return redirect()->route('detail.index')
        ->with('success','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailTransaksi $detailTransaksi)
    {
        //
    }
}
