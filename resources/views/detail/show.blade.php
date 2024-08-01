@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Kategori
                    <a href="{{route('kategori.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Kategori</label>
                        <b>{{$kategori->nama_kategori}}</b>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('/images/kategori/' . $kategori->gambar) }}" alt="" style="width: 200px">
                    </div>
                    <div class="mb-2">
                        <label for="">Keterangan</label>
                        <b>{{$kategori->ket}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
