@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card ">
                <div class="card-header"> Data Produk
                    <a href="{{route('produk.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-2">Nama Produk</th>
                                <th class="col-md-2">Deskripsi</th>
                                <th class="col-md-2">Harga</th>
                                <th class="col-md-2">Stok</th>
                                <th class="col-md-2">Image</th>
                                <th class="col-md-2">Kategori</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                            @foreach ($produk as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_produk}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->harga}}</td>
                                <td>{{$item->stok}}</td>
                                <td align="center"><img src="{{asset('/images/produk/' . $item->gambar)}}" style="width: 100px;" alt=""></td>
                                <td>{{$item->kategori->nama_kategori}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button
                                          type="button"
                                          class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                          data-bs-toggle="dropdown"
                                          aria-expanded="false"
                                        >
                                          <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <form action="{{route('produk.destroy',$item->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <li><a href="{{route('produk.edit', $item->id)}}" class="dropdown-item">Edit</a></li>
                                                <li><a href="{{route('produk.show', $item->id)}}" class="dropdown-item">Show</a></li>
                                                <li><a href="{{ route('produk.destroy', $item->id) }}" class="dropdown-item"
                                                    data-confirm-delete="true">Delete</a></li>
                                            </form>
                                          </li>
                                        </ul>
                                      </div>

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
