@extends('layouts.base')
@push('addOnTopScript')
<link rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">

            <div class="row bg-info p-5 rounded">
                <div class="col-6 mx-auto my-5">
                    <form class="d-flex"
                          role="search">
                        <input class="form-control me-2"
                               type="search"
                               placeholder="Cari Buku"
                               aria-label="Search">
                    </form>
                </div>
            </div>

            <div class="book-content row mt-3">
                <div class="row">
                    <div class="col-12">
                        <h4>Kategori 1</h4>
                    </div>
                </div>
                <div class="row d-flex flex-nowrap overflow-auto">
                    <div class="col-6 col-lg-4">
                        <div class="book shadow rounded py-3 m-3 d-flex">
                            <div class="row w-100">

                                <div class="col-6">
                                    <div class="book-cover">
                                        <img src="https://berita.99.co/wp-content/uploads/2022/08/Contoh-Cover-Buku-Noverl-Simple-yang-Populer.jpg"
                                             alt=""
                                             class="img-fluid">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="book-detail">
                                        <h6>Judul Buku</h6>
                                        <p>nananna</p>
                                        <hr>
                                        <h6>Penulis</h6>
                                        <p>lorem</p>
                                        <hr>
                                        <h6>Stock</h6>
                                        <p>6</p>
                                    </div>
                                    <div class="book-action">
                                        <button class="btn btn-info d-block w-100">Pinjam</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


@push('addOnBottomScript')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
          });
</script>
@endpush