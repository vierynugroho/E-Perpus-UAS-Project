@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Pinjam</h1>
    <a href="#"
       onclick="window.print()"
       class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
           class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
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
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_dipinjam }} Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Peminjam Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Peminjam</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_peminjam }} Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
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
            <div class="card-header py-3 bg-primary text-bg-primary">
                <h6 class="m-0 font-weight-bold">Data Pinjam</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table display"
                           id="dataTable">
                        <thead>
                            <th>No</th>
                            <th>Peminjam</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->book->judul }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    @if ($data->book->quantity === 0 && $data->status_pinjam === 'PENDING')
                                    <p class="badge text-bg-danger bg-danger p-2">STOK HABIS</p>
                                    @else
                                    @if ($data->status_pinjam === 'PENDING')
                                    <p class="badge text-bg-warning bg-warning p-2">PENDING</p>
                                    @elseif ($data->status_pinjam === 'DIPINJAM')
                                    <p class="badge text-bg-primary bg-primary p-2">DIPINJAM</p>
                                    @else
                                    <p class="badge text-bg-success bg-success p-2">DIKEMBALIKAN</p>
                                    @endif
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle"
                                           href="#"
                                           role="button"
                                           data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            Aksi
                                        </a>

                                        <ul class="dropdown-menu">
                                            @if ($data->book->quantity === 0 && $data->status_pinjam === 'PENDING')
                                            @else
                                            <li><a class="dropdown-item"
                                                   href="/dashboard/daftarpinjam/{{ $data->id }}/edit"><i
                                                       class="fas fa-pen fa-sm text-primary"></i> Edit</a>
                                            </li>
                                            @endif
                                            <li>
                                                <form action="{{ route('daftarpinjam.destroy', $data->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="dropdown-item"><i
                                                           class="fas fa-trash fa-sm text-primary"></i> Hapus</button>
                                                </form>
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