@extends('layouts.auth')

@section('content')

<body style="background-color: #166534;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">

                            {{-- Kiri: Logo --}}
                            <div class="col-lg-6 d-flex align-items-center justify-content-center bg-white">
                                <img src="/src/3;4.png" alt="PayNote Logo" style="max-height: 300px; width: auto; object-fit: contain;">
                            </div>

                            {{-- Kanan: Form Login --}}
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group">
                                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Button Login -->
                                        <button type="submit"
                                            class="btn btn-user btn-block text-white"
                                            style="background-color: #166534;">
                                            {{ __('Login') }}
                                        </button>
                                    </form>

                                    <hr>
                                    @if (Route::has('password.request'))
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                    @endif
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                            {{-- End Form --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
