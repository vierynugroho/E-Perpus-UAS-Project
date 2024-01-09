@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">History Pinjam</h1>
    <a href="#"
       class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
           class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Buku Dipinjam Card  -->
    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Buku Dipinjam</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_dipinjam }} Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table display"
                           id="dataTable">
                        <thead>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Status</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->id_buku }}</td>
                                <td>@if ($data->status_pinjam = 'PENDING')
                                    <p class="badge text-bg-warning bg-warning p-2">PENDING</p>
                                    @elseif ($data->status_pinjam = 'DIPINJAM')
                                    <p class="badge text-bg-warning bg-info p-2">DIPINJAM</p>
                                    @else
                                    <p class="badge text-bg-warning bg-success p-2">DIKEMBALIKAN</p>
                                    @endif
                                </td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->updated_at }}</td>
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