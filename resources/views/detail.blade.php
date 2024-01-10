@extends('layouts.base')

@section('content')
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
                                <h6>Pengarang</h6>
                                <p>{{ $data->penulis }}</p>
                            </div>
                            <div class="col-6">
                                <h6>Penerbit</h6>
                                <p>{{ $data->penerbit }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h6>Kategori</h6>
                                <p>{{ $data->category->name }}</p>
                            </div>
                            <div class="col-6">
                                <h6>Stok</h6>
                                <p>{{ $data->quantity }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book-action p-3 position-absolute bottom-0 w-100">
                    <div class="">
                        <button class="btn btn-primary d-block w-100 ">Pinjam</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection