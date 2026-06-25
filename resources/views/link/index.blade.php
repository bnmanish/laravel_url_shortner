@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card shadow">

                <div class="card-header">
                    <h4 class="mb-0">Create Short URL</h4>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {!! session('success') !!}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('store.link') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Title
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="title"
                                name="title"
                                value="{{ old('title') }}"
                                placeholder="Enter title"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="url" class="form-label">
                                Original URL
                            </label>

                            <input
                                type="url"
                                class="form-control"
                                id="url"
                                name="url"
                                value="{{ old('url') }}"
                                placeholder="https://example.com"
                                required>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                Create Short URL
                            </button>

                            <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>

@endsection