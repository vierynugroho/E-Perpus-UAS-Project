@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Buku</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Buku Dipinjam Card  -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Buku Dipinjam</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_pinjam }} Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Favorit Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Buku</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_buku }} Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-12">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Buku</h6>
                <a href="/dashboard/daftarbuku/create"
                   class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>
                    Tambah Buku</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table display"
                           id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $i++ }}</th>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->category->name }}</td>
                                <td>{{ $data->penulis }}</td>
                                <td>{{ $data->penerbit }}</td>
                                <td>{{ $data->tahun }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>
                                    <div class="
                                dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle"
                                           href="#"
                                           role="button"
                                           data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            Aksi
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                   href="/dashboard/daftarbuku/{{ $data->id }}"><i
                                                       class="fas fa-eye fa-sm text-primary"></i> Detail</a></li>
                                            <li><a class="dropdown-item"
                                                   href="/dashboard/daftarbuku/{{ $data->id }}/edit"><i
                                                       class="fas fa-pen fa-sm text-primary"></i> Edit</a></li>
                                            <li>
                                                <form action="{{ route('daftarbuku.destroy', $data->id) }}"
                                                      method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="dropdown-item"
                                                            type="submit"><i
                                                           class="fas fa-trash fa-sm text-primary"></i>
                                                        Hapus</button>
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
@endsection