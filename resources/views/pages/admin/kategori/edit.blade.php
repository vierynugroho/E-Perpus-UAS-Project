@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->


<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Kategori </h6>
            </div>
            {{-- kategori --}}
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit Kategori</h4>
                </div>
                <form action="{{ route('kategori.update', $data->id) }}"
                      method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nama Kategori </label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       placeholder='nama kategori'
                                       value="{{ $data->name }}"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col">
                            <button type="submit"
                                    class="btn btn-primary btn-block"><i class="fa fa-save"
                                   aria-hidden="true"></i> Simpan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div @endsection