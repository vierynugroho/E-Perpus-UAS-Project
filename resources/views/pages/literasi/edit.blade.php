@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Literasi</h1>
</div>

<!-- Content Row -->
<div class="row d-flex align-items-center justify-content-center mt-5">

    <!-- Content Column -->
    <div class="col-lg-10 mb-6">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-bg-primary bg-primary">
                <h6 class="m-0 font-weight-bold">Form Edit Literasi</h6>
            </div>
            <div class="card-body">
                <form method="POST"
                      action="{{ route('literasi.update', $data->id) }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-12 mb-3">
                            <label for="id_label_single"
                                   class="w-100">
                                Judul Buku
                                <select class="js-example-basic-single form-select @error('id_buku')
                                                    is-invalid
                                            @enderror"
                                        id="inputGroupSelect"
                                        name="id_buku"
                                        required
                                        style="width: 100%">
                                    <option value="{{ $data->id_buku }}"
                                            selected
                                            hidden>{{ $data->book->judul }}</option>
                                    @foreach ($books as $book)
                                    <option value="{{ $book->id }}">{{ $book->judul }}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('id_buku')
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
                                       class="form-control @error('judul')
                                           is-invalid
                                           @enderror"
                                       id="floatingInput"
                                       placeholder="Judul Ringkasan"
                                       name="judul"
                                       value="{{ $data->judul }}"
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
                                       class="form-control @error('halaman_dibaca')
                                               is-invalid
                                           @enderror"
                                       id="floatingInput"
                                       placeholder="Halaman Dibaca"
                                       name="halaman_dibaca"
                                       value="{{$data->halaman_dibaca}}"
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
                    </div>
                    <div class="form-group row">
                        <div class="col-12 mb-3">
                            <label for="ringkasan"
                                   class="form-label">Ringkasan
                                <p>
                                    <small>*Panjang ringkasan minimal 300
                                        karakter</small>
                                </p>
                            </label>
                            <textarea class="form-control @error('ringkasan')
                                is-invalid
                            @enderror"
                                      name="ringkasan"
                                      id="ckeditor"
                                      cols="30"
                                      rows="10">{!! $data->ringkasan !!}</textarea>
                            @error('ringkasan')
                            <span class="invalid-feedback"
                                  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit"
                                class="btn btn-primary mt-4"><i class="fa fa-save"></i> Simpan</button>
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
        .create( document.querySelector( '#ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );
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