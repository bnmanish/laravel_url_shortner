@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header">
                    <h4 class="mb-0">Verify Email Address</h4>
                </div>

                <div class="card-body">

                    <p class="text-muted">
                        Thanks for signing up! Before getting started, could you verify your email
                        address by clicking on the link we just emailed to you? If you didn't
                        receive the email, we will gladly send you another.
                    </p>

                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success">
                            A new verification link has been sent to the email address you
                            provided during registration.
                        </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center mt-4">

                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <button type="submit" class="btn btn-primary">
                                Resend Verification Email
                            </button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-outline-danger">
                                Log Out
                            </button>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection