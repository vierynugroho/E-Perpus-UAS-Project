@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Input Buku</h1>
</div>


<!-- Content Row -->
<div class="row w-100">
    <div class="col-10 mx-auto">
        <div class="card shadow">
            <div class="card-header">{{ __('Input Buku') }}</div>

            <div class="card-body">
                <form method="POST"
                      action="{{ route('perpustakaan.store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="Judul"
                                       name="judul"
                                       value="{{ old('judul') }}"
                                       required
                                       autocomplete="judul"
                                       autofocus>
                                <label for="floatingInput">Judul</label>
                                @error('judul')
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
                                       placeholder="Penulis"
                                       name="penulis"
                                       value="{{ old('penulis') }}"
                                       required
                                       autocomplete="penulis"
                                       autofocus>
                                <label for="floatingInput">Penulis</label>
                                @error('penulis')
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
                                       placeholder="Penerbit"
                                       name="penerbit"
                                       value="{{ old('penerbit') }}"
                                       required
                                       autocomplete="penerbit"
                                       autofocus>
                                <label for="floatingInput">Penerbit</label>
                                @error('penerbit')
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
                                        aria-label="Kategori"
                                        name="kategori">
                                    <option selected
                                            hidden>- Kategori Buku -</option>
                                    <option value="1">Matematika</option>
                                    <option value="2">Informatika</option>
                                    <option value="3">Sains</option>
                                </select>
                                <label for="floatingSelect">Kategori</label>

                                @error('kategori')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="number"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="tahun"
                                       name="tahun"
                                       value="{{ old('tahun') }}"
                                       required
                                       autocomplete="tahun"
                                       autofocus>
                                <label for="floatingInput">Tahun Terbit</label>
                                @error('tahun')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="number"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="stok"
                                       name="quantity"
                                       value="{{ old('quantity') }}"
                                       required
                                       autocomplete="quantity"
                                       autofocus>
                                <label for="floatingInput">stok</label>
                                @error('quantity')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mx-3 mb-3 mx-auto d-flex justify-content-evenly">
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