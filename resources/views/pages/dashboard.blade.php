@extends('layouts.base')

@push('addOnTopScript')
<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin-2.min.css') }}"
      rel="stylesheet">
@endpush

@section('content')
<div id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
            id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
               href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Perpus</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link"
                   href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Your Library
            </div>
            <!-- Nav Item - Favorite Menu -->
            <li class="nav-item">
                <a class="nav-link"
                   href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Favorit</span></a>
            </li>

            <!-- Nav Item - Buku Di Pinjam Menu -->
            <li class="nav-item">
                <a class="nav-link"
                   href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Buku Di Pinjam</span></a>
            </li>

            <!-- Nav Item - History Pinjam Menu -->
            <li class="nav-item">
                <a class="nav-link"
                   href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>History Pinjam</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Literation
            </div>

            <!-- Nav Item - Achievment -->
            <li class="nav-item">
                <a class="nav-link"
                   href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Literasi</span></a>
            </li>
            <!-- Nav Item - Achievment -->
            <li class="nav-item">
                <a class="nav-link"
                   href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Isi Literasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Personal Information
            </div>

            <!-- Nav Item - Achievment -->
            <li class="nav-item">
                <a class="nav-link"
                   href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Achievment</span></a>
            </li>

            <!-- Nav Item - setting -->
            <li class="nav-item">
                <a class="nav-link"
                   href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Settings</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Message -->
            <div class="sidebar-card d-flex">
                <a href="/">
                    <img class="sidebar-card-illustration mb-2"
                         src="{{ asset('images/undraw_rocket.svg') }}"
                         alt="rocket">
                </a>
                <p class="text-center mb-2"><strong>E-Perpus</strong> reading a book is opening a window to the world !
                </p>

            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper"
             class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid mt-4">

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
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Leaderboard</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                              class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger"
                                             role="progressbar"
                                             style="width: 20%"
                                             aria-valuenow="20"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                              class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning"
                                             role="progressbar"
                                             style="width: 40%"
                                             aria-valuenow="40"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                              class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar"
                                             role="progressbar"
                                             style="width: 60%"
                                             aria-valuenow="60"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                              class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info"
                                             role="progressbar"
                                             style="width: 80%"
                                             aria-valuenow="80"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                              class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success"
                                             role="progressbar"
                                             style="width: 100%"
                                             aria-valuenow="100"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded"
       href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade"
         id="logoutModal"
         tabindex="-1"
         role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close"
                            type="button"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"
                            type="button"
                            data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary"
                       href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addOnScript')
<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@endpush