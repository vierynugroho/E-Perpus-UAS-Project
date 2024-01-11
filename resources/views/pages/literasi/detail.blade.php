@extends('layouts.base_dashboard')

@section('content_dashboard')
<div class="container">
    <div class="card mb-3 w-100 p-1">
        <div class="row g-0 mt-2">
            <div class="col-12">
                <div class="card-header bg-primary text-bg-primary">
                    <h5 class="card-title fw-bold">Judul Literasi</h5>
                    <h5>{{$literasi->judul}}</h5>
                </div>
                <div class="card-body mb-5">
                    <hr>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Penulis</h6>
                            <p>{{ $literasi->user->name }}</p>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">Dibuat</h6>
                            <p>{{ $literasi->created_at }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Halaman</h6>
                            <p>
                                Halaman {{ $literasi->halaman_dibaca }}
                            </p>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">
                                Judul Buku
                            </h6>
                            <p>{{ $literasi->book->judul }}</p>
                        </div>
                    </div>
                    <div class="sidebar-divider">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="fw-bold">Ringkasan</h6>
                            <p>{!! $literasi->ringkasan !!}</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection