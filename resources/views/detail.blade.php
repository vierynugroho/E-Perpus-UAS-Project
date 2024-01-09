@extends('layouts.base')

@section('content')
<div class="container">
    <div class="card mb-3 w-100 p-1">
        <div class="row g-0 mt-2">
            <div class="col-md-4 text-center">
                <img src="https://berita.99.co/wp-content/uploads/2022/08/Contoh-Cover-Buku-Noverl-Simple-yang-Populer.jpg"
                     class="img-fluid mx-auto "
                     alt="Cover">

            </div>
            <div class="col-md-8 position-relative">
                <div class="card-body mb-5">
                    <div>
                        <h1 class="card-title">{{$data->judul}}</h1>
                        <hr>
                        <p class="card-text">
                        <h6>Pengarang</h6>
                        <p>{{ $data->penulis }}</p>
                        <h6>Penerbit</h6>
                        <p>{{ $data->penerbit }}</p>
                        <h6>Kategori</h6>
                        <p>{{ $data->id_kategori }}</p>
                        <h6>Stok</h6>
                        <p>{{ $data->quantity }}</p>
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