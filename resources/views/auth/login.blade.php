@extends('layouts.app')

@section('content')
<div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="card shadow" style="max-width:450px;width:100%;">
        <div class="card-body p-4">

            <h3 class="text-center mb-4">Login</h3>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        required
                    >

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Remember -->
                <div class="form-check mb-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="remember"
                        name="remember"
                    >

                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif

                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                </div>

                @if (Route::has('register'))
                    <div class="text-center">
                        Don't have an account?
                        <a href="{{ route('register') }}">
                            Register
                        </a>
                    </div>
                @endif

            </form>

        </div>
    </div>
</div>
@endsection