@extends('layouts.base_dashboard')

@section('content_dashboard')
<!-- Begin Page Content -->
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengaturan Akun</h1>
</div>


<!-- Content Row -->
<div class="row w-100">
    <div class="col-10 mx-auto">
        <div class="card shadow">
            <div class="card-header">{{ __('Pengaturan Akun') }}</div>
            <div class="card-body">
                <form action="/dashboard/settings/{{ auth()->user()->nik }}"
                      method="post"
                      enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text"
                                       class="form-control"
                                       id="nama"
                                       placeholder="Nama Lengkap"
                                       name="name"
                                       value="{{ $data->name }}"
                                       required
                                       autocomplete="nama"
                                       autofocus>
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
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email"
                                       class="form-control"
                                       placeholder="Email"
                                       name="email"
                                       value="{{ $data->email }}"
                                       required
                                       autocomplete="email"
                                       autofocus>
                                @error('email')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class=" mb-3">
                                <label for="nik">NIK</label>
                                <input type="text"
                                       class="form-control"
                                       id="nik"
                                       placeholder="NIK"
                                       name="nik"
                                       value="{{ $data->nik }}"
                                       required
                                       autocomplete="nik"
                                       autofocus>
                                @error('nik')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="role">Role</label>
                                @if(!$data->is_admin)
                                <select class="form-select"
                                        id="role"
                                        aria-label="role"
                                        name="is_admin"
                                        disabled>
                                    @else
                                    <select class="form-select"
                                            id="role"
                                            aria-label="role"
                                            name="is_admin">
                                        @endif
                                        @if($data->is_admin)
                                        <option selected
                                                hidden>Admin</option>
                                        @else
                                        <option selected
                                                hidden>User</option>
                                        @endif
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>

                                    @error('is_admin')
                                    <span class="invalid-feedback"
                                          role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="row">
                            <div class="col-12">
                                <small class="italic"
                                       disabled>* Isi form jika ingin mengubah password</small>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="password"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="password"
                                       name="password"
                                       value="{{ old('password') }}"
                                       autocomplete="password"
                                       autofocus>
                                <label for="floatingInput">Password</label>
                                @error('password')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="password"
                                       class="form-control"
                                       id="floatingInputConfirm"
                                       placeholder="Konfirmasi Password"
                                       name="password_confirm"
                                       value="{{ old('password_confirm') }}"
                                       autocomplete="password_confirm"
                                       autofocus>
                                <label for="floatingInputConfirm">Konfirmasi Password</label>
                                @error('password_confirm')
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