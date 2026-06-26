@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <!-- Update Profile -->
            <div class="card shadow mb-4">

                <div class="card-header">
                    <h4 class="mb-0">Profile Information</h4>
                </div>

                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>

            </div>

            <!-- Update Password -->
            <div class="card shadow mb-4">

                <div class="card-header">
                    <h4 class="mb-0">Update Password</h4>
                </div>

                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>

            </div>

            <!-- Delete Account -->
            <div class="card shadow">

                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0">Delete Account</h4>
                </div>

                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>

            </div>

        </div>

    </div>

</div>

@endsection