@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card ">
                <div class="card-header"> Data Detail Transaksi
                    {{-- <a href="{{route('produk.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-2">Nama</th>
                                <th class="col-md-2">Produk</th>
                                <th class="col-md-2">Jumlah</th>
                                <th class="col-md-2">Total</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                            @foreach ($detailTransaksi as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->produk->nama_produk}}</td>
                                <td>{{$item->keranjang->jumlah}}</td>
                                <td>{{$item->total_harga}}</td>
                                <td>
                                 <form action="{{route('detail.destroy',$item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('detail.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                    <a href="{{route('detail.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
                                    <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
