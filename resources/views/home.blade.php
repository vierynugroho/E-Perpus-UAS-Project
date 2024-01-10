@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="row bg-primary p-5 rounded mx-auto shadow">
                <div class="col-6 col-sm-12 mx-auto my-5 w-100">
                    <form class="d-flex"
                          role="search"
                          @if($cari_buku===null)
                          action='{{ route('home') }}'
                          @else
                          action='{{ route('cari_buku', $cari_buku) }}'
                          @endif
                          method="GET">
                        @csrf
                        <input class="form-control me-2"
                               type="search"
                               placeholder="Cari Buku"
                               aria-label="Search"
                               name="cari_buku"
                               value="{{ $cari_buku }}">
                        <button class="btn btn-outline-light"
                                type="submit">Cari</button>
                    </form>
                </div>
            </div>
            <div class=" container shadow kategori-content row mt-4">
                <div class="row">
                    <div class="col-12">
                        <h4 class="fw-bold">KATEGORI</h4>
                    </div>
                    <div class="divider">
                        <br>
                    </div>
                </div>
                <div class="row d-flex flex-nowrap overflow-auto">
                    @forelse ($categories as $category)
                    <div class="col-6 col-md-3">
                        <a href="/homebycategory/{{ $category->id }}"
                           class="text-decoration-none">
                            <div class="card shadow rounded mb-3">
                                <div class="card-body mx-auto">
                                    <h3>{{ $category->name }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty
                    <p class="text-center text-muted">- TIDAK ADA BUKU -</p>
                    @endforelse
                </div>
            </div>
            <div class="container shadow book-content row my-5 p-2">
                <div class="row">
                    <div class="col-12">
                        <h4 class="fw-bold">PERPUSTAKAAN</h4>
                    </div>
                    <div class="divider">
                        <br>
                    </div>
                </div>
                <div class="row d-flex mx-auto">
                    @foreach ($datas as $data)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card book shadow rounded p-3 m-3 d-flex">
                            <div class="row w-100">
                                <div class="col-6">
                                    <div class="book-cover">
                                        <img src="{{ Storage::url($data->cover) }}"
                                             alt="Cover Buku"
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
                                    <h6 class="fw-bold">Stock: <span>{{ $data->quantity }}</span></h6>
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
                    @endforeach
                </div>
                {{ $datas->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
</div>

@endsection

@section('footer_content')
<footer class="mt-3 shadow">
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