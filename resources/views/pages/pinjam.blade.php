@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Di Pinjam</h1>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Buku Dipinjam Card  -->
    <div class="col">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Buku Dipinjam</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_pinjam_user }} Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row mt-3">

    <!-- Content Column -->
    <div class="col-12">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-primary text-bg-primary">
                <h6 class="m-0 font-weight-bold">Data Buku Dipinjam</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table display"
                           id="dataTable">
                        <thead>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
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
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->book->judul }}</td>
                                <td>{{ $data->book->penulis }}</td>
                                <td>{{ $data->book->penerbit }}</td>
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
                                            <li><a class="dropdown-item"
                                                   href="/dashboard/pinjam/{{ $data->id }}"><i
                                                       class="fas fa-eye fa-sm text-primary"></i> Detail</a>
                                            </li>
                                            @if ($data->status_pinjam === 'DIPINJAM')

                                            @else
                                            <li>
                                                <form action="{{ route('pinjam.destroy', $data->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="dropdown-item"><i
                                                           class="fas fa-trash fa-sm text-primary"></i> Hapus</button>
                                                </form>
                                            </li>
                                            @endif
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