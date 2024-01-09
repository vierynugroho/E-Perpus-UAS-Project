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
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kategori </h6>
            </div>
            {{-- kategori --}}
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Tambah Kategori</h4>
                </div>
                <form action="{{url('Categories')}}"
                      method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nama Kategori </label>
                                <input type="text"
                                       name="nama"
                                       class="form-control"
                                       placeholder='nama kategori'
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col">
                            <button type="submit"
                                    class="btn btn-primary btn-block"><i class="fa fa-plus"
                                   aria-hidden="true"></i>Tambah</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div @endsection