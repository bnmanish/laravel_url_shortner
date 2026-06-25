@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="card shadow">

        <div class="card-header">
            <h4 class="mb-0">Invite User</h4>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('invite.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required>
                </div>

                @if(Auth::user()->role == 'Super Admin')
                    <div class="mb-3">
                        <label for="company" class="form-label">
                            Company
                        </label>

                        <select
                            name="company"
                            id="company"
                            class="form-select"
                            required>

                            <option value="">Select Company</option>

                            @foreach($companies as $company)
                                <option
                                    value="{{ $company->id }}"
                                    {{ old('company') == $company->id ? 'selected' : '' }}>
                                    {{ $company->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                @endif

                <div class="mb-4">
                    <label for="password" class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

@endsection