@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#"
       class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
           class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                        <div class="h5 mb-0 font-weight-bold text-gray-800">2 Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
                            Favorit</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">3 Buku</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Top 1</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info"
                                         role="progressbar"
                                         style="width: 50%"
                                         aria-valuenow="50"
                                         aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                        <div class="h5 mb-0 font-weight-bold text-gray-800">10 Literasi</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
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
                <h6 class="m-0 font-weight-bold text-primary">Leaderboard</h6>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-item list-unstyled">
                        <div class="row">
                            <div class="col-2">
                                <p>1 👑</p>
                            </div>
                            <div class="col-10">
                                <p>King</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-item list-unstyled">
                        <div class="row">
                            <div class="col-2">
                                <p>2</p>
                            </div>
                            <div class="col-10">
                                <p>Sepuh</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-item list-unstyled">
                        <div class="row">
                            <div class="col-2">
                                <p>3</p>
                            </div>
                            <div class="col-10">
                                <p>Pemula</p>
                            </div>
                        </div>
                    </li>
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