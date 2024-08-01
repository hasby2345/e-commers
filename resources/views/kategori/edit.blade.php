@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Kategori
                        <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="nis">Kategori</label>
                                        <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror"
                                            name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
                                        @error('nama_kategori')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Gambar</label>
                                        @if($kategori->gambar)
                                        <p><img src="{{ asset('image/kategori/' . $kategori->gambar) }}" alt="Gambar" width="100px"></p>
                                        @endif
                                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                        @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="nis">Keterangan</label>
                                        <input type="text" class="form-control @error('ket') is-invalid @enderror"
                                            name="ket" value="{{ old('ket', $kategori->ket) }}">
                                        @error('ket')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
