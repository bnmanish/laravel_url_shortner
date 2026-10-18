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
            <form id="profile-form" style="post" action="{{route('profile.update')}}">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="Priya">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="Menon">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="*******">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="*******">
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
{{-- Page-specific JavaScript --}}
@push('scripts')
<script>
    $( document ).ready(function() {
        $('#profile-form').on('submit', function (e) {
            e.preventDefault();

            // AJAX code here
        });
    });
</script>
@endpush