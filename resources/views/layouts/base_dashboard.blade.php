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
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
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

            <!-- Nav Item - Buku Di Pinjam Menu -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pinjam*') ? 'active' : '' }}""
                   href="
                   /pinjam">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Buku Di Pinjam</span></a>
            </li>

            <!-- Nav Item - History Pinjam Menu -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('history*') ? 'active' : '' }}""
                   href="
                   /history">
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
                <a class="nav-link {{ Request::is('literasi') ? 'active' : '' }}""
                   href="
                   /literasi">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Literasi</span></a>
            </li>
            <!-- Nav Item - Achievment -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('literasi/create') ? 'active' : '' }}""
                   href="
                   /literasi/create">
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
                <a class="nav-link {{ Request::is('achievment') ? 'active' : '' }}""
                   href="
                   /achievment">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Achievment</span></a>
            </li>

            <!-- Nav Item - setting -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('user') ? 'active' : '' }}""
                   href="
                   /settings">
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
                <div class="container-fluid mt-4">
                    @yield('content_dashboard')
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; E-Perpus UNISBA 2024</span>
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
