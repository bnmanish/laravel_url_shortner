@extends('layouts.app')
@section('title', 'Log in — Knot')
@section('meta_description', 'Login — Donate & Keep It Free')
@section('content')
    <div class="row g-0" style="min-height:100vh;">

        <div class="col-lg-12 d-flex align-items-center">
            <div class="w-100 px-4 px-md-5 py-5">
                <div class="auth-form-wrap">
                    <h2 class="mb-2">Welcome back.</h2>
                    <p class="text-soft mb-4">Log in to see what people are clicking today.</p>

                    <form class="login-form" action="{{route('logedin')}}" method="POST">
                        @csrf();
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="you@company.com" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label">Password</label>
                                <a href="#" class="text-rope" style="font-size:0.85rem;">Forgot?</a>
                            </div>
                            <input name="password" type="password" class="form-control"
                                placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" required>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label text-soft" for="remember">Keep me logged in</label>
                        </div>
                        <button type="button" class="btn btn-ink w-100 mb-3 loginButtonAction">Log in</button>
                        <button type="button" class="btn btn-outline-ink w-100">
                            Continue with Google
                        </button>
                    </form>

                    <p class="text-center text-soft mt-4 mb-0">New to Knot? <a href="{{ route('signup') }}"
                            class="text-rope fw-semibold">Create an account</a></p>
                </div>
            </div>
        </div>

    </div>
@endsection
{{-- Page-specific JavaScript --}}
@push('scripts')
<script>
    $( document ).ready(function() {
        // console.log( "ready!" );
        $('.loginButtonAction').click(function(){
            let formData = $('.login-form').serialize();
            $.ajax({
                url: '{{route('logedin')}}',
                type: 'POST',
                data: formData,
                success: function (response) {
                    console.log(response);
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
@endpush
