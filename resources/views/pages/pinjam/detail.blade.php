@extends('layouts.base')

@section('content')
<div class="container">
    <div class="card mb-3 w-100 p-1">
        <div class="row g-0 mt-2">
            <div class="col-md-4 text-center">
                <img src="{{ Storage::url($data->book->cover) }}"
                     class="img-fluid mx-auto "
                     alt="Cover">
            </div>
            <div class="col-md-8 position-relative">
                <div class="card-header bg-primary text-bg-primary">
                    <h1 class="card-title">{{$data->book->judul}}</h1>
                </div>
                <div class="card-body mb-5">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Pengarang</h6>
                            <p>{{ $data->book->penulis }}</p>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">Penerbit</h6>
                            <p>{{ $data->book->penerbit }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Status</h6>
                            @if ($data->status_pinjam === 'PENDING')
                            <p class="badge text-bg-warning bg-warning p-2">PENDING</p>
                            @elseif ($data->status_pinjam === 'DIPINJAM')
                            <p class="badge text-bg-primary bg-primary p-2">DIPINJAM</p>
                            @else
                            <p class="badge text-bg-success bg-success p-2">DIKEMBALIKAN</p>
                            @endif
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">Kategori</h6>
                            <p>{{ $data->book->category->name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Tanggal Pinjam</h6>
                            <p>{{ $data->created_at }}</p>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">Tanggal Transaksi Akhir</h6>
                            <p>{{ $data->updated_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection