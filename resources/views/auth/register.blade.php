@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-bg-primary">{{ __('Register') }}</div>
                <div class="card-body hero">
                    <p class="py-5"></p>
                    <p class="py-5"></p>
                </div>
                <div class="card-body">
                    <form method="POST"
                          action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text"
                                           class="form-control @error('nik')
                                        is-invalid
                                        @enderror"
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
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text"
                                           class="form-control @error('name')
                                           is-invalid
                                       @enderror"
                                           id="floatingInput"
                                           placeholder="Nama Lengkap"
                                           name="name"
                                           value="{{ old('name') }}"
                                           required
                                           autocomplete="name"
                                           autofocus>
                                    <label for="floatingInput">Nama Lengkap</label>
                                    @error('name')
                                    <span class="invalid-feedback"
                                          role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-8">
                                <div class="form-floating mb-3">
                                    <input type="email"
                                           class="form-control @error('email')
                                            is-invalid
                                            @enderror"
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
                            <div class="col-4">
                                <div class="form-floating">
                                    <select class="form-select"
                                            id="floatingSelect"
                                            name="is_admin">
                                        <option selected
                                                value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    <label for="floatingSelect">Role</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="password"
                                           class="form-control @error('password')
                                        is-invalid
                                        @enderror"
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
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="password"
                                           class="form-control @error('password_confirmation')
                                        is-invalid
                                        @enderror"
                                           id="pw"
                                           placeholder="password_confirmation"
                                           name="password_confirmation"
                                           value="{{ old('password_confirmation') }}"
                                           required
                                           autocomplete="password_confirmation"
                                           autofocus>
                                    <label for="pw">Password Confirmation</label>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback"
                                          role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row w-100">
                            <div class="col-8 mx-auto">
                                <button type="submit"
                                        class="btn btn-primary d-block w-100">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection