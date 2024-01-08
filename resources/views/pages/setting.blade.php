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
                <form method="POST"
                      action="'/dashboard/settings/1"
                      method="PUT"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="Nama Lengkap"
                                       name="nama"
                                       value="{{ old('nama') }}"
                                       required
                                       autocomplete="nama"
                                       autofocus>
                                <label for="floatingInput">Nama Lengkap</label>
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
                            <div class="form-floating mb-3">
                                <input type="email"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="Email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required
                                       autocomplete="email"
                                       autofocus>
                                <label for="floatingInput">Email</label>
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
                            <div class="form-floating mb-3">
                                <input type="text"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="NIK"
                                       name="nik"
                                       value="{{ old('nik') }}"
                                       required
                                       autocomplete="nik"
                                       autofocus>
                                <label for="floatingInput">NIK</label>
                                @error('nik')
                                <span class="invalid-feedback"
                                      role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <select class="form-select"
                                        id="floatingSelect"
                                        aria-label="role"
                                        name="is_admin">
                                    <option selected
                                            hidden>- Role -</option>
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                </select>
                                <label for="floatingSelect">Role</label>

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
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="password"
                                       class="form-control"
                                       id="floatingInput"
                                       placeholder="password"
                                       name="password"
                                       value="{{ old('password') }}"
                                       required
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
                                       id="floatingInput"
                                       placeholder="Konfirmasi Password"
                                       name="password_confirm"
                                       value="{{ old('password_confirm') }}"
                                       required
                                       autocomplete="password_confirm"
                                       autofocus>
                                <label for="floatingInput">Konfirmasi Password</label>
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