@extends('layouts.base')

@push('addOnTopScript')
<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin-2.min.css') }}"
      rel="stylesheet">

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

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

            {{-- ! USER ! --}}
            @php
            use App\Models\User;
            $user = User::where('nik', auth()->user()->nik)->get();
            @endphp

            @if (!$user[0]->is_admin)
            <!-- Heading -->
            <div class="sidebar-heading">
                Your Library
            </div>

            <!-- Nav Item - Di Pinjam -->
            <li class="nav-item {{ Request::is('dashboard/pinjam*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/pinjam">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Buku Di Pinjam</span></a>
            </li>

            <!-- Nav Item - History Pinjam -->
            <li class="nav-item {{ Request::is('dashboard/history*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/history">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>History Pinjam</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Literation
            </div>

            <!-- Nav Item - Literasi -->
            <li class="nav-item {{ Request::is('dashboard/literasi*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="/dashboard/literasi"><i class="fas fa-fw fa-tasks"></i>
                    <span>Literasi</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- ! END USER ! --}}

            {{-- ! ADMIN ! --}}
            @else
            <!-- Heading -->
            <div class="sidebar-heading">
                Administrator
            </div>
            <!-- Nav Item - Daftar Buku -->
            <li class="nav-item {{ Request::is('dashboard/daftarbuku*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/daftarbuku">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Daftar Buku</span></a>
            </li>

            {{-- Nav Item - Daftar Kategori --}}
            <li class="nav-item {{ Request::is('dashboard/kategori*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/kategori">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Daftar Kategori</span></a>
            </li>

            {{-- Nav Item - Daftar Pinjam --}}
            <li class="nav-item {{ Request::is('dashboard/daftarpinjam*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/daftarpinjam">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Daftar Pinjam</span></a>
            </li>

            {{-- Nav Item - History Pinjam --}}
            <li class="nav-item {{ Request::is('dashboard/daftarhistoripinjam*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/daftarhistoripinjam">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Daftar History Pinjam</span></a>
            </li>

            {{-- Nav Item - Daftar Literasi --}}
            <li class="nav-item {{ Request::is('dashboard/daftarliterasi*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/daftarliterasi">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Daftar Literasi</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- ! END ADMIN ! --}}
            @endif

            <!-- Heading -->
            <div class="sidebar-heading">
                Personal Information
            </div>

            <!-- Nav Item - Leaderboard -->
            <li class="nav-item {{ Request::is('dashboard/leaderboard*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/leaderboard">
                    <i class="fas fa-fw fa-medal"></i>
                    <span>Leaderboard</span></a>
            </li>

            <!-- Nav Item - user setting -->
            <li class="nav-item {{ Request::is('dashboard/settings*') ? 'active' : '' }}">
                <a class="nav-link"
                   href="
                   /dashboard/settings">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pengaturan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link"
                   href="#"
                   data-bs-toggle="modal"
                   data-bs-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    Logout
                </a>
            </li>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-flex">
                <a href="/">
                    <img class="sidebar-card-illustration mb-2"
                         src="{{ asset('images/undraw_rocket.svg') }}"
                         alt="rocket">
                </a>
                <p class="text-center mb-2"><strong>E-Perpus</strong> Unisba Balitar
                </p>
            </div>
        </ul>
        <!-- Divider -->
        <hr class="sidebar-divider">
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
                <div class="modal-header bg-primary text-bg-primary">
                    <h5 class="modal-title"
                        id="exampleModalLabel">Anda Akan Logout?</h5>
                    <button class="close"
                            type="button"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan Logout untuk keluar dan mengakhiri sesi</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"
                            type="button"
                            data-bs-dismiss="modal">Batal</button>

                    <a class="btn btn-danger"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form"
                          action="{{ route('logout') }}"
                          method="POST"
                          class="d-none">
                        @csrf
                    </form>
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