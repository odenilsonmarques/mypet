@extends('layouts.templateAccess')

@section('content')
<div class="container ">
    <div class="col-md-4 offset-md-4">
        <h3 style="margin-top:40px;margin-bottom:40px;text-align:center">Login</h3>
    </div>
    <div class="col-md-4 offset-md-4">
        <form method="POST" action="{{ route('login') }}" >
            @csrf
            <label for="email">{{ __('Email') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror<br>

            <label for="password">{{ __('Senha') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror<br>
                    
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Relembre-me') }}
                </label>
            </div><br>

            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Acessar') }}
                </button>
                <!-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif -->
            </div>
        </form>
    </div>
</div>
@endsection
