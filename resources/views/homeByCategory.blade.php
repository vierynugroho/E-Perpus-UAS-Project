@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">

            <div class="row bg-primary p-5 rounded mx-auto shadow">
                <div class="col-8 col-sm-12 mx-auto my-5 w-100">
                    <form class="d-flex"
                          role="search">
                        <input class="form-control me-2"
                               type="search"
                               placeholder="Cari Buku"
                               aria-label="Search">
                    </form>
                </div>
            </div>
            <div class="container shadow book-content row my-5">
                <div class="row">
                    <div class="col-12">
                        <h4>PERPUSTAKAAN : {{ $category->name }}</h4>
                    </div>
                    <div class="divider">
                        <br>
                    </div>
                </div>
                <div class="row d-flex mx-auto">
                    @forelse ($datas as $data)
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="card book shadow rounded p-3 m-3 d-flex">
                            <div class="row w-100">
                                <div class="col-6">
                                    <div class="book-cover">
                                        <img src="https://berita.99.co/wp-content/uploads/2022/08/Contoh-Cover-Buku-Noverl-Simple-yang-Populer.jpg"
                                             alt="Cover Buku {{ $data->judul }}"
                                             class="img-fluid">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="book-detail">

                                        <h6 class="fw-bold">{{ $data->judul }}</h6>
                                        <hr>
                                        <p><span class="fw-bold">Penulis: </span> {{ $data->penulis }}</p>
                                    </div>
                                </div>
                                <div class="col-12 m-2">
                                    @if ($data->quantity > 0)
                                    <h6>Stock: <span>{{ $data->quantity }}</span></h6>
                                    @else
                                    <h6 class="text-danger fw-bold text-center">TIDAK TERSEDIA</h6>
                                    @endif
                                </div>
                                <div class="book-action">
                                    <a href="/detail/{{ $data->id }}"
                                       class="list-unstyled text-decoration-none text-dark">
                                        <button class="btn btn-primary d-block w-100 fw-bold">Detail</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @empty
                    <h1 class="text-center text-muted p-5">- TIDAK ADA BUKU -</h1>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</div>

@endsection