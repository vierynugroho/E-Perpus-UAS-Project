@extends('layouts.base_dashboard')

@section('content_dashboard')
<div class="container">
    <div class="card mb-3 w-100 p-1">
        <div class="row g-0 mt-2">
            <div class="col-md-4 text-center">

                <img src="{{ Storage::url($data->cover) }}"
                     class="img-fluid mx-auto "
                     alt="Cover">

            </div>
            <div class="col-md-8 position-relative">
                <div class="card-body mb-5">
                    <div>
                        <h1 class="card-title">{{$data->judul}}</h1>
                        <hr>
                        <p class="card-text">
                        <div class="row">
                            <div class="col-12">
                                {!! $data->sinopsis !!}
                            </div>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="fw-bold">Pengarang</h6>
                            </div>
                            <div class="col">
                                <p>{{ $data->penulis }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6 class="fw-bold">Penerbit</h6>
                            </div>
                            <div class="col-6">
                                <p>{{ $data->penerbit }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6 class="fw-bold">Kategori</h6>
                            </div>
                            <div class="col-6">
                                <p>{{ $data->category->name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6 class="fw-bold">Stok</h6>
                            </div>
                            <div class="col-6">
                                <p>{{ $data->quantity }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection