@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-5">

        <div class="card shadow">
            <div class="card-header">
                <h4>Forgot Password</h4>
            </div>

            <div class="card-body">

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <p>
                    Forgot your password? No problem. Enter your email address and we'll send you a password reset link.
                </p>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-3">
                        <label>Email</label>

                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary">
                        Email Password Reset Link
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection