@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Buku</h1>
</div>


<!-- Content Row -->
<div class="row w-100">
    <div class="col-10 mx-auto">
        <div class="card shadow">
            <div class="card-header bg-primary text-bg-primary">{{ __('Edit Buku') }}</div>

            <div class="card-body">
                <form method="POST"
                      action="{{ route('daftarbuku.update', $book->id) }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control @error('judul')
                                           is-invalid
                                       @enderror"
                                       id="floatingInput"
                                       placeholder="Judul"
                                       name="judul"
                                       value="{{ $book->judul }}"
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
                                       class="form-control @error('penulis')
                                           is-invalid
                                       @enderror"
                                       id="floatingInput"
                                       placeholder="Penulis"
                                       name="penulis"
                                       value="{{ $book->penulis }}"
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
                                       class="form-control @error('penerbit')
                                           is-invalid
                                       @enderror"
                                       id="floatingInput"
                                       placeholder="Penerbit"
                                       name="penerbit"
                                       value="{{ $book->penerbit }}"
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

                    <div class="row">
                        <div class="col-12">
                            <label for="id_label_single"
                                   class="w-100">
                                Kategori Buku
                                <select class="form-select @error('id_kategori')
                                           is-invalid
                                       @enderror js-example-basic-single"
                                        id="floatingSelect"
                                        aria-label="Kategori"
                                        name="id_kategori"
                                        style="width: 100%">
                                    <option selected
                                            hidden
                                            value="{{ $book->id_kategori }}">
                                        {{ $book->id_kategori }}</option>

                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </label>

                            @error('id_kategori')
                            <span class="invalid-feedback"
                                  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="number"
                                       class="form-control @error('tahun')
                                           is-invalid
                                       @enderror"
                                       id="floatingInput"
                                       placeholder="tahun"
                                       name="tahun"
                                       value="{{ $book->tahun }}"
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
                                       class="form-control @error('quantity')
                                           is-invalid
                                       @enderror"
                                       id="floatingInput"
                                       placeholder="stok"
                                       name="quantity"
                                       value="{{ $book->quantity }}"
                                       required
                                       autocomplete="quantity"
                                       autofocus
                                       min="0">
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
                    <div class="form-group row">
                        <div class="col-12 mb-3">
                            <label for="sinopsis"
                                   class="form-label @error('sinopsis')
                                           is-invalid
                                       @enderror">Sinopsis</label>
                            <textarea class="form-control"
                                      name="sinopsis"
                                      id="ckeditor"
                                      cols="30"
                                      rows="10">{{ $book->sinopsis }}</textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="file"
                                       class="form-control @error('cover')
                                           is-invalid
                                       @enderror"
                                       id="floatingInput"
                                       placeholder="cover"
                                       name="cover"
                                       value="{{ old('cover') }}"
                                       autocomplete="cover"
                                       autofocus>
                                <label for="floatingInput">Cover Buku</label>
                                @error('cover')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <small class="text-muted">*Jangan upload file jika cover tidak ingin diganti</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 mx-3 mb-3 mx-auto d-flex justify-content-between ">
                            <button type="submit"
                                    class="btn btn-primary col-7"><i class="fa fa-save"
                                   aria-hidden="true"></i>
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

@push('addOnBottomScript')
<script>
    ClassicEditor
            .create(document.querySelector('#ckeditor'))
            .catch(error => {
                console.error(error);
            });
</script>

{{-- SELECT 2 --}}
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            width: 'resolve'
        });
    });
</script>
@endpush