@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">Table /</span> Kategori
              </h4>
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card ">
                <div class="card-header"> Data Kategori
                    <a href="{{route('kategori.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                            <tr>
                                <th class="col-md-1">No</th>
                                <th class="col-md-2">Nama kategori</th>
                                <th class="col-md-2">Gambar</th>
                                <th class="col-md-2">Keterangan</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                            @foreach ($kategori as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_kategori}}</td>
                                <td align="center"><img src="{{asset('/images/kategori/' . $item->gambar)}}" style="width: 100px;" alt=""></td>
                                <td>{{$item->ket}}</td>
                                <td>
                                    <center>
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
                                    </center>
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


{{-- <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
              <td>Albert Cook</td>
              <td>


              </td>
              <td><span class="badge bg-label-warning me-1">Pending</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-edit-alt me-2"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-2"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> --}}
