<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg knot-nav sticky-top">
        <div class="container">
            <a class="knot-logo" href="{{route('home')}}">
                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="12.5" width="15" height="9" rx="4.5" transform="rotate(-38 3 12.5)" stroke="currentColor" stroke-width="2.3" />
                    <rect x="14" y="9.5" width="15" height="9" rx="4.5" transform="rotate(-38 14 9.5)" stroke="currentColor" stroke-width="2.3" />
                </svg>Knot
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('features')}}">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('pricing')}}">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}">Dashboard</a></li>
                </ul>
                <div class="d-flex gap-2 mt-3 mt-lg-0">
                    <a href="{{route('login')}}" class="btn btn-ghost">Log in</a>
                    <a href="{{route('signup')}}" class="btn btn-rope">Start for free</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="knot-footer py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <a class="knot-logo text-white mb-3 d-inline-flex" href="index.html">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="12.5" width="15" height="9" rx="4.5"
                                transform="rotate(-38 3 12.5)" stroke="currentColor" stroke-width="2.3" />
                            <rect x="14" y="9.5" width="15" height="9" rx="4.5"
                                transform="rotate(-38 14 9.5)" stroke="currentColor" stroke-width="2.3" />
                        </svg>
                        Knot
                    </a>
                    <p style="max-width:32ch;">A short link is still a promise. Knot keeps it, tracks it, and brings it
                        home.</p>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Product</h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="features.html">Features</a></li>
                        <li><a href="pricing.html">Support Us</a></li>
                        <li><a href="dashboard.html">Dashboard</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Account</h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="login.html">Log in</a></li>
                        <li><a href="signup.html">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Company</h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="#">About</a></li>
                        <li><a href="carrier.html">Careers</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Legal</h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="privacy-policy.html">Privacy</a></li>
                        <li><a href="terms-conditions.html">Terms</a></li>
                        <li><a href="disclaimer.html">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
            <div class="divider mt-4 pt-4 d-flex flex-wrap justify-content-between gap-2">
                <span>&copy; 2026 Knot. A theme, not a real product.</span>
                <span>Built with Bootstrap 5</span>
            </div>
        </div>
    </footer>

    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/js/app.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery-4.0.0.min.js"></script>
    @stack('scripts')
</body>
</html>