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
                                <img src="/src/3;4.png" alt="PayNote Logo"
                                    style="max-height: 300px; width: auto; object-fit: contain;">
                            </div>

                            {{-- Kanan: Form Register --}}
                            <div class="col-lg-6 px-5 pb-4">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">{{ __('Register') }}</h1>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Name -->
                                                <div class="form-group">
                                                    <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required autocomplete="name"
                                                        autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Password -->
                                                <div class="form-group">
                                                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="new-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <!-- Confirm Password -->
                                                <div class="form-group">
                                                    <label for="password-confirm"
                                                        class="col-form-label text-md-right">{{ __('Confirm PW') }}</label>
                                                    <input id="password-confirm" type="password"
                                                        class="form-control" name="password_confirmation" required
                                                        autocomplete="new-password">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- Submit Button -->
                                                <button type="submit"
                                                    class="btn btn-user btn-block text-white"
                                                    style="background-color: #166534;">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
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
