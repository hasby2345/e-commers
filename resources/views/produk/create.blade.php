@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card">
                <div class="card-header">Data Produk
                    <a href="{{route('produk.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="">Produk</label>
                                    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
                                        name="nama_produk">
                                    @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi">
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><div class="mb-2">
                                    <label for="">Harga</label>
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga">
                                    @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                </div><div class="mb-2">
                                    <label for="">Stock</label>
                                    <input type="text" class="form-control @error('stok') is-invalid @enderror"
                                        name="stok">
                                    @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Foto</label>
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                        name="gambar">
                                    @error('gambar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Kategori</label>
                                    <select name="id_kategori"
                                        class="form-control @error('id_kategori') is-invalid @enderror" id="">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($kategori as $data)
                                        <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                    @error('nama_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
