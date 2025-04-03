@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row min-vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">{{ __('Đăng nhập') }}</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Mật khẩu') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Ghi nhớ đăng nhập') }}
                                </label>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Đăng nhập') }}
                            </button>
                            <a href="{{ route('register') }}" class="btn btn-outline-dark">
                                {{ __('Đăng ký') }}
                            </a>
                        </div>

                        <div class="text-center mt-3">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Quên mật khẩu?') }}
                                </a>
                            @endif
                        </div>

                        <div class="d-flex align-items-center my-4">
                            <hr class="flex-grow-1">
                            <span class="mx-3 text-muted">hoặc</span>
                            <hr class="flex-grow-1">
                        </div>

                        <div class="d-grid">
                            <a class="btn btn-outline-secondary">
                                <i class="fab fa-google me-2"></i>{{ __('Đăng nhập bằng Google') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
