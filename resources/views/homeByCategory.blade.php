@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row p-5 rounded mx-auto shadow hero">
                    <div class="col-8 col-sm-12 mx-auto my-5 w-100">
                        <form class="d-flex"
                              role="search"
                              @if($cari_buku===null)
                              action='{{ route('homeByCategory', $category->id) }}'
                              @else
                              action='{{ route('cari_buku_perkategori', [$category->id, $cari_buku]) }}'
                              @endif
                              method="GET">
                            @csrf
                            <input class="form-control me-2"
                                   type="search"
                                   placeholder="Cari Buku"
                                   aria-label="Search"
                                   name="cari_buku"
                                   value="{{ $cari_buku }}">
                            <button class="btn btn-outline-light d-flex justify-content-center align-items-center"
                                    type="submit"><i class="fas fa-search"></i> Cari</button>
                        </form>
                    </div>
                </div>
                <div class="row shadow kategori-content mx-auto mt-4">
                    <div class="col-12 mt-3">
                        <h4 class="fw-bold">PERPUSTAKAAN : {{ $category->name }}</h4>
                    </div>
                    <div class="divider">
                        <br>
                    </div>
                    @forelse ($datas as $data)
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="card book shadow rounded p-3 m-3 d-flex">
                            <div class="row w-100">
                                <div class="col-6">
                                    <div class="book-cover">
                                        <img src="{{ Storage::url($data->cover) }}"
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
            {{ $datas->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

@endsection
@section('footer_content')
<footer class="mt-3 shadow bg-primary text-bg-primary pt-2">
    <div class="row w-100">
        <div class="px-5 col-4 d-flex justify-content-start flex-column">
            <img src="{{ asset('images/logo.jpg') }}"
                 alt="logo unisba"
                 class="img-fluid w-25">
            <br>
            <h3>Universitas Islam Balitar</h3>
            <p>Jl. Majapahit No.2- 4, Sananwetan, Kec. Sananwetan, Kota Blitar, Jawa Timur 66137</p>
        </div>
        <div class="px-5 col-4 d-flex justify-content-center align-items-center flex-column">
            <h3>E-Perpus UNISBA</h3>
            <p>Kelompok 2 - TI 5B</p>
        </div>
        <div class="px-5 col-4 d-flex justify-content-end flex-column align-items-end">
            <h3>Informatika 5B</h3>
            <p>Viery Nugroho - 21104410049</p>
            <p>Batara Mahardika A. - 21104410063</p>
            <p>Nurul Mushtofa Thohir. - 21104410095</p>
            <p>Muhammad Yusuf I.R. - 21104410079</p>
        </div>
    </div>
</footer>
@endsection