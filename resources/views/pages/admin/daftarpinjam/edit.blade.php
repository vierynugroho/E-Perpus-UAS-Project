@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pinjam Buku</h1>
</div>


<!-- Content Row -->
<div class="row w-100">
    <div class="col-10 mx-auto">
        <div class="card shadow">
            <div class="card-header">{{ __('Edit Pinjam Buku') }}</div>

            <div class="card-body">
                <form method="POST"
                      action="{{ route('daftarpinjam.update', $data->id) }}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="Judul Buku"
                                       name="judul buku"
                                       value="{{ $data->id_buku }}"
                                       required
                                       autocomplete="judul"
                                       autofocus>
                                <label for="floatingInput">Judul Buku</label>
                                @error('judul buku')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="Nama Peminjam"
                                       name="Nama Peminjam"
                                       value="{{ $data->id_user }}"
                                       required
                                       autocomplete=""
                                       autofocus>
                                <label for="floatingInput">Nama Peminjam</label>
                                @error('namapeminjam')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="id"
                                       name="id"
                                       value="{{ $data->created_at }}"
                                       required
                                       autocomplete="id"
                                       autofocus>
                                <label for="floatingInput">Tanggal Pinjam</label>
                                @error('id')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select"
                                        id="floatingSelect"
                                        aria-label="status"
                                        name="status">
                                    <option selected
                                            hidden>
                                        @if ($data->updated_at === null)
                                        Dipinjam
                                        @else
                                        Dikembalikan
                                        @endif
                                    </option>
                                    <option value="{{now()}}">Dipinjam</option>
                                    <option value="{{ null }}">Dikembalikan</option>
                                </select>
                                <label for="floatingSelect">Status</label>

                                @error('status')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 mx-3 mb-3 mx-auto d-flex justify-content-between ">
                            <button type="submit"
                                    class="btn btn-primary col-7">
                                Simpan
                            </button>
                            <button type="reset"
                                    class="btn btn-outline-primary col-4">
                                Batal
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection