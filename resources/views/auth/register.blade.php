@extends('auth.app')

@section("title") Daftar Akun @endsection

@section('content')
<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
    <div class="card">
        <div class="card-header"><h4>{{ __('Daftar Akun') }}</h4></div>

        <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
        @csrf

            <div class="row">
                <div class="form-group col-12">
                    <label for="name">{{ __('Nama Lengkap') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="row">
            <div class="form-group col-6">
                <label for="password" class="d-block">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
            <div class="form-group col-6">
                <label for="password-confirm" class="d-block">{{ __('Konfirmasi Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    {{ __('Register') }}
                </button>
            </div>

            <div class="row text-center">
                <div class="form-group col-6">
                    <a href="{{ url('/auth/facebook') }}" class="btn btn-lg">
                        <i class="fab fa-facebook"></i>
                            Facebook
                    </a>
                </div>
                <div class="form-group col-6">
                    <a href="{{ url('/auth/github') }}" class="btn btn-lg">
                        <i class="fab fa-github"></i>
                        Github
                    </a>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('login') }}">Sudah Punya Akun</a>
            </div>

        </form>
        </div>
    </div>
</div>
@endsection
