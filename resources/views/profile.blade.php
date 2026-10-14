@extends('layouts.dash')
@section('title', 'Knot — Shorten, brand, and track every link')
@section('meta_description', 'Knot — Shorten, brand, and track every link')
@section('content')
    {{-- Page-specific CSS --}}
    @push('styles')
    @endpush
    <div class="dash-content">

        <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-2">
            <div>
                <h2 class="h3 mb-1">Profile</h2>
                <p class="text-soft mb-0">Manage your account</p>
            </div>
        </div>

        <!-- Account settings -->
        <div class="stat-tile mb-4">
            <h6 class="mb-3 pb-2" style="border-bottom:1px solid var(--line);">Account</h6>
            <form onsubmit="return false;">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control" value="Priya">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last name</label>
                        <input type="text" class="form-control" value="Menon">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="priya@fernway.com">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter new password to change">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-rope">Save changes</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </main>
    </div>
@endsection
