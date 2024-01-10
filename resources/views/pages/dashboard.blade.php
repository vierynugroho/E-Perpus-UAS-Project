@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#"
       class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
           class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
</div>

<!-- Content Row -->
<div class="row">
    @if (auth()->user()->is_admin)
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

    <!-- Jumlah Buku Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Banyak Buku</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_buku }} Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Literasi Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Literasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_literasi }} Literasi</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tasks fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Peminjam Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Peminjam</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_peminjam }} Peminjam</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <!-- Buku Dipinjam Card  -->
    <div class="col-xl-3 col-md-6 mb-4">
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

    <!-- Rank Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Rank
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rank
                                    {{ $rank_user }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-medal fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Literasi Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Literasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_literasi_user }} Literasi</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tasks fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dibaca Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Buku Dibaca</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_buku_dibaca }} Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-12">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-bg-primary bg-primary">
                <h6 class="m-0 font-weight-bold">Leaderboard</h6>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-item list-unstyled">
                        <div class="row fw-bold">
                            <div class="col-2">
                                <p class="text-center">Rank</p>
                            </div>
                            <div class="col-8">
                                <p class="text-center">Nama</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center">Total Literasi</p>
                            </div>
                        </div>
                    </li>
                    @php
                    $i=1;
                    @endphp
                    @forelse ($leaderboards as $leaderboard)
                    <li class="list-item list-unstyled">
                        <div class="row">
                            <div class="col-2">
                                <p class="text-center">{{ $i++ }}</p>
                            </div>
                            <div class="col-8">
                                <p class="text-center">{{ $leaderboard->user->name }}</p>
                            </div>
                            <div class="col-2">
                                <p class="text-center">{{ $leaderboard->jumlah_literasi }}</p>
                            </div>
                        </div>
                    </li>
                    @empty

                    @endforelse
                    <li class="list-item text-center list-unstyled">
                        <a href="/dashboard/leaderboard">
                            <small>Lihat Selengkapnya</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection