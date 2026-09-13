@extends('layouts.app')
@section('title', 'Log in — Knot')
@section('meta_description', 'Login — Donate & Keep It Free')
@section('content')
<div class="row g-0" style="min-height:100vh;">

  <div class="col-lg-12 d-flex align-items-center order-2 order-lg-1">
    <div class="w-100 px-4 px-md-5 py-5">
      <div class="auth-form-wrap">
        <h2 class="mb-2">Create your account.</h2>
        <p class="text-soft mb-4">50 links a month, free — no credit card needed.</p>

        <form onsubmit="return false;">
          <div class="row">
            <div class="col-6 mb-3">
              <label class="form-label">First name</label>
              <input type="text" class="form-control" placeholder="Priya" required>
            </div>
            <div class="col-6 mb-3">
              <label class="form-label">Last name</label>
              <input type="text" class="form-control" placeholder="Menon" required>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Work email</label>
            <input type="email" class="form-control" placeholder="you@company.com" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="At least 8 characters" required>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="terms" required>
            <label class="form-check-label text-soft" for="terms">I agree to the <a href="#" class="text-rope">Terms</a> and <a href="#" class="text-rope">Privacy Policy</a></label>
          </div>
          <button type="submit" class="btn btn-rope w-100 mb-3">Create account</button>
          <button type="button" class="btn btn-outline-ink w-100">
            Continue with Google
          </button>
        </form>

        <p class="text-center text-soft mt-4 mb-0">Already have an account? <a href="{{route('login')}}" class="text-rope fw-semibold">Log in</a></p>
      </div>
    </div>
  </div>

</div>
@endsection