@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Produk
                    <a href="{{route('produk.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nama Produk</label>
                        <b>{{$produk->nama_produk}}</b>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <label for="">Deskripsi</label>
                        <b>{{$produk->deskripsi}}</b>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <label for="">Harga</label>
                        <b>{{$produk->harga}}</b>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <label for="">Stock</label>
                        <b>{{$produk->stok}}</b>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <img src="{{ asset('/images/produk/' . $produk->gambar) }}" alt="" style="width: 200px">
                    </div>
                    <hr>
                    <div class="mb-2">
                        <label for="">Kategori</label>
                        <b>{{$produk->id_kategori}}</b>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
