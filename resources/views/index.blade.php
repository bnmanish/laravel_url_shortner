<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel URL Shortener') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            {{ config('app.name', 'Laravel URL Shortener') }}
        </a>

        <div class="ms-auto">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-light me-2">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                    Login
                </a>

                @if(Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </div>
</nav>

<section class="py-5 bg-light">
    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Laravel URL Shortener
        </h1>

        <p class="lead mt-3">
            Create short, memorable URLs and track their performance with ease.
        </p>

        <div class="mt-4">

            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-2">
                    Get Started
                </a>

                <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg">
                    Login
                </a>
            @endauth

        </div>

    </div>
</section>

<section class="py-5">
    <div class="container">

        <div class="row text-center">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5>🔗 Short URLs</h5>
                        <p>Create unique short links instantly.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 mt-md-0">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5>📊 Analytics</h5>
                        <p>Track clicks and monitor link usage.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 mt-md-0">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5>⚡ Fast & Secure</h5>
                        <p>Built with Laravel and Bootstrap 5.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<footer class="bg-dark text-white text-center py-3">
    © {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.
</footer>

</body>
</html>