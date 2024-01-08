@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Literasi</h1>
</div>

<!-- Content Row -->
<form action=""
      class="">
    <div class="row d-flex align-items-center justify-content-center mt-5">

        <!-- Content Column -->
        <div class="col-lg-10 mb-6">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Literasi</h6>
                </div>
                <div class="card-body row">
                    <div class="col-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select"
                                    id="floatingSelect"
                                    aria-label="Judul Buku"
                                    name="id_buku">
                                <option selected
                                        hidden>- Judul Buku Buku -</option>
                                <option value="1">Matematika</option>
                                <option value="2">Informatika</option>
                                <option value="3">Sains</option>
                            </select>
                            <label for="floatingSelect">Judul Buku</label>

                            @error('kategori')
                            <span class="invalid-feedback"
                                  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-8">
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="Judul Ringkasan"
                                       name="judul"
                                       value="{{ old('judul') }}"
                                       required
                                       autocomplete="judul"
                                       autofocus>
                                <label for="floatingInput">Judul Ringkasan</label>
                                @error('judul')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="Halaman Dibaca"
                                       name="halaman_dibaca"
                                       value="example: 1 - 10"
                                       required
                                       autocomplete="halaman_dibaca"
                                       autofocus>
                                <label for="floatingInput">Halaman Dibaca</label>
                                @error('halaman_dibaca')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="ringkasan"
                                   class="form-label">Ringkasan</label>
                            <textarea class="form-control"
                                      name="ringkasan"
                                      id="ckeditor"
                                      cols="30"
                                      rows="10"
                                      minlength="200"></textarea>
                        </div>
                        <button type="submit"
                                class="btn btn-primary mt-4">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
</form>
@endsection

@push('addOnBottomScript')
<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush