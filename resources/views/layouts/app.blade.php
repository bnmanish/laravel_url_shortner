<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/custom.css">
    <link rel="icon" type="image/x-icon" href="{{url('assets/logo/favicon.png')}}">
    @stack('styles')
    <style>
        .knot-logo{
            width: 123px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg knot-nav sticky-top">
        <div class="container">
            <a class="knot-logo" href="{{route('home')}}">
                <img class="w-100" src="{{url('assets/logo/knot.png')}}" alt="knot">
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
                        <img class="w-100" src="{{url('assets/logo/knot-light-logo.png')}}" alt="knot">
                    </a>
                    <p style="max-width:32ch;">A short link is still a promise. Knot keeps it, tracks it, and brings it
                        home.</p>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Product</h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="{{route('features')}}">Features</a></li>
                        <li><a href="{{route('pricing')}}">Support Us</a></li>
                        <li><a href="{{route('login')}}">Dashboard</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Account</h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="{{route('login')}}">Log in</a></li>
                        <li><a href="{{route('signup')}}">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Company</h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="#">About</a></li>
                        <li><a href="{{route('career')}}">Careers</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Legal</h6>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="{{route('privacy.policy')}}">Privacy</a></li>
                        <li><a href="{{route('terms.conditions')}}">Terms</a></li>
                        <li><a href="{{route('disclaimer')}}">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
            <div class="divider mt-4 pt-4 d-flex flex-wrap justify-content-between gap-2">
                <span>&copy; 2026 Knot. A theme, not a real product.</span>
                <span>Built with Bootstrap 5</span>
            </div>
        </div>
    </footer>

    <!-- simple Cookie Consent Banner starts-->
    {{--<div class="cookie-banner" id="cookieBanner">
      <p>We use cookies to ensure you get the best experience on Knot. By continuing, you agree to our use of cookies.</p>
      <div class="d-flex gap-2">
        <button class="btn btn-ghost btn-sm" onclick="acceptCookies()">Accept All</button>
        <button class="btn btn-rope btn-sm" onclick="acceptCookies()">Got it</button>
      </div>
    </div>--}}
    <!-- simple Cookie Consent Banner ends-->

    <!-- Cookie Consent Banner starts-->
    <div id="cookieConsentBanner"
         class="cookie-consent-banner"
         style="display: none;">

        <div class="cookie-consent-content">

            <div class="cookie-consent-text">
                <h6 class="mb-1">We use cookies</h6>

                <p class="mb-0">
                    We use cookies to improve your experience, remember your
                    preferences, and understand how Knot is used.
                </p>
            </div>

            <div class="cookie-consent-actions">
                <button type="button"
                        class="btn btn-link cookie-settings-btn"
                        id="cookieSettingsBtn">
                    Cookie Settings
                </button>

                <button type="button"
                        class="btn btn-outline-light"
                        id="rejectCookiesBtn">
                    Reject Non-Essential
                </button>

                <button type="button"
                        class="btn btn-primary"
                        id="acceptCookiesBtn">
                    Accept All
                </button>
            </div>

        </div>
    </div>
    <!-- Cookie Settings Modal -->
    <div class="modal fade"
         id="cookieSettingsModal"
         tabindex="-1"
         aria-labelledby="cookieSettingsModalLabel"
         aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="cookieSettingsModalLabel">
                        Cookie Preferences
                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                    </button>

                </div>

                <div class="modal-body">

                    <p class="text-muted small">
                        Choose which types of cookies you want to allow.
                        Essential cookies cannot be disabled because they are
                        required for basic website functionality.
                    </p>


                    <!-- Essential -->
                    <div class="cookie-option">

                        <div>
                            <strong>Essential Cookies</strong>

                            <p class="text-muted small mb-0">
                                Required for login, security, sessions and
                                basic website functionality.
                            </p>
                        </div>

                        <div class="form-check form-switch">

                            <input class="form-check-input"
                                   type="checkbox"
                                   checked
                                   disabled>

                        </div>

                    </div>


                    <!-- Analytics -->
                    <div class="cookie-option">

                        <div>
                            <strong>Analytics Cookies</strong>

                            <p class="text-muted small mb-0">
                                Help us understand how visitors use Knot
                                so we can improve the service.
                            </p>
                        </div>

                        <div class="form-check form-switch">

                            <input class="form-check-input"
                                   type="checkbox"
                                   id="analyticsCookies">

                        </div>

                    </div>


                    <!-- Marketing -->
                    <div class="cookie-option">

                        <div>
                            <strong>Marketing Cookies</strong>

                            <p class="text-muted small mb-0">
                                Used to measure advertising effectiveness
                                and provide relevant content.
                            </p>
                        </div>

                        <div class="form-check form-switch">

                            <input class="form-check-input"
                                   type="checkbox"
                                   id="marketingCookies">

                        </div>

                    </div>

                </div>


                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="button"
                            class="btn btn-primary"
                            id="saveCookiePreferences">
                        Save Preferences
                    </button>

                </div>

            </div>

        </div>
    </div>
    <!-- Cookie Consent Banner ends-->

    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/js/app.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery-4.0.0.min.js"></script>
    <script src="{{ url('/') }}/assets/js/custom.js"></script>
    @stack('scripts')
    <!-- simple Cookie Consent Banner js starts-->
    <!-- <script>
        // Cookie consent
        function acceptCookies() {
          var banner = document.getElementById('cookieBanner');
          if (banner) {
            banner.style.display = 'none';
          }
        }
    </script> -->
    <!-- simple Cookie Consent Banner js ends-->
</body>
</html>