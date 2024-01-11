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
                <div class="card-header bg-primary text-bg-primary">
                    <h1 class="card-title">{{$data->judul}}</h1>
                </div>
                <div class="card-body mb-5">

                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Pengarang</h6>
                            <p>{{ $data->penulis }}</p>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">Penerbit</h6>
                            <p>{{ $data->penerbit }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Kategori</h6>
                            <p>{{ $data->category->name }}</p>
                        </div>
                        <div class="col-6">
                            @if ($data->quantity > 0)
                            <h6 class="fw-bold">Stock: <span>{{ $data->quantity }}</span></h6>
                            @else
                            <h6 class="text-danger fw-bold">TIDAK TERSEDIA</h6>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="fw-bold">Sinopsis</h6>
                            {!! $data->sinopsis !!}
                        </div>
                    </div>
                </div>
                <div class="book-action p-3 position-absolute bottom-0 w-100">
                    <form action="{{ route('pinjam.store') }}"
                          method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"
                               name="id_buku"
                               value="{{ $data->id }}">
                        <input type="hidden"
                               name="id_user"
                               value="{{ auth()->user()->nik }}">
                        @if ($data->quantity <= 0)
                           <button
                           class="btn btn-danger d-block w-100"
                           disabled>STOK HABIS</button>
                            @elseif(auth()->user()->is_admin)
                            <<<<<<< HEAD ''======='rewel'
                                    @else>>>>>>> 6a79a84d7951b4bc1035bc919ae78f0a70376a6d
                                <button class="btn btn-primary d-block w-100"
                                        type="submit">Pinjam</button>
                                @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection