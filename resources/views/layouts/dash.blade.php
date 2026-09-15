<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/logo/favicon.png') }}">
    @stack('styles')
    <style>
        .knot-logo {
            width: 123px;
        }
    </style>
</head>

<body>

    <div class="dash-shell">

        <!-- Sidebar -->
        <aside class="dash-sidebar" id="dashSidebar">
            <a class="knot-logo mb-5" href="{{route('dashboard')}}">
                <img class="w-100" src="{{url('assets/logo/knot-light-logo.png')}}" alt="knot">
            </a>

            <nav class="d-grid gap-1 mb-auto">
                <a class="dash-nav-link" href="{{route('dashboard')}}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="8" height="8" rx="1.5" />
                        <rect x="13" y="3" width="8" height="5" rx="1.5" />
                        <rect x="13" y="11" width="8" height="10" rx="1.5" />
                        <rect x="3" y="14" width="8" height="7" rx="1.5" />
                    </svg>
                    Links
                </a>
                <a class="dash-nav-link active" href="{{route('analytics')}}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 20V10M12 20V4M20 20v-7" />
                    </svg>
                    Analytics
                </a>
                <a class="dash-nav-link" href="{{route('qrcode')}}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="4" y="4" width="6" height="6" />
                        <rect x="14" y="4" width="6" height="6" />
                        <rect x="4" y="14" width="6" height="6" />
                        <path d="M14 15h6M17 12v6" />
                    </svg>
                    QR codes
                </a>
                <a class="dash-nav-link" href="{{route('bio')}}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="8" r="3.2" />
                        <path d="M5 21c0-4 3-6.5 7-6.5s7 2.5 7 6.5" />
                    </svg>
                    Bio page
                </a>
                <a class="dash-nav-link" href="dashboard-team.html">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="9" cy="8" r="3" />
                        <path d="M2 20c0-3.3 3-6 7-6s7 2.7 7 6" />
                        <circle cx="18" cy="9" r="2.4" />
                        <path d="M17 14c2.8.3 5 2.4 5 5.5" />
                    </svg>
                    Team
                </a>
                <a class="dash-nav-link" href="dashboard-settings.html">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="3.2" />
                        <path
                            d="M19.4 13.5a1.7 1.7 0 0 0 .34 1.87l.06.06a2.1 2.1 0 1 1-2.96 2.96l-.06-.06a1.7 1.7 0 0 0-1.87-.34 1.7 1.7 0 0 0-1.03 1.55V20a2.1 2.1 0 1 1-4.2 0v-.09a1.7 1.7 0 0 0-1.1-1.55 1.7 1.7 0 0 0-.34-1.87l-.06-.06A2.1 2.1 0 1 1 8.2 4.15l.06.06a1.7 1.7 0 0 0 1.87.34H10.2a1.7 1.7 0 0 0 1.03-1.55V3a2.1 2.1 0 1 1 4.2 0v.09a1.7 1.7 0 0 0 1.03 1.55 1.7 1.7 0 0 0 1.87-.34l.06-.06a2.1 2.1 0 1 1 2.96 2.96l-.06.06a1.7 1.7 0 0 0-.34 1.87V9.2a1.7 1.7 0 0 0 1.55 1.03H21a2.1 2.1 0 1 1 0 4.2h-.09a1.7 1.7 0 0 0-1.55 1.03Z" />
                    </svg>
                    Settings
                </a>
                <a class="dash-nav-link" href="#">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 20V10M12 20V4M20 20v-7" />
                    </svg>
                    Analytics
                </a>
                <a class="dash-nav-link" href="#">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="4" y="4" width="6" height="6" />
                        <rect x="14" y="4" width="6" height="6" />
                        <rect x="4" y="14" width="6" height="6" />
                        <path d="M14 15h6M17 12v6" />
                    </svg>
                    QR codes
                </a>
                <a class="dash-nav-link" href="#">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="8" r="3.2" />
                        <path d="M5 21c0-4 3-6.5 7-6.5s7 2.5 7 6.5" />
                    </svg>
                    Bio page
                </a>
                <a class="dash-nav-link" href="#">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="9" cy="8" r="3" />
                        <path d="M2 20c0-3.3 3-6 7-6s7 2.7 7 6" />
                        <circle cx="18" cy="9" r="2.4" />
                        <path d="M17 14c2.8.3 5 2.4 5 5.5" />
                    </svg>
                    Team
                </a>
                <a class="dash-nav-link" href="#">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="3.2" />
                        <path
                            d="M19.4 13.5a1.7 1.7 0 0 0 .34 1.87l.06.06a2.1 2.1 0 1 1-2.96 2.96l-.06-.06a1.7 1.7 0 0 0-1.87-.34 1.7 1.7 0 0 0-1.03 1.55V20a2.1 2.1 0 1 1-4.2 0v-.09a1.7 1.7 0 0 0-1.1-1.55 1.7 1.7 0 0 0-1.87.34l-.06.06a2.1 2.1 0 1 1-2.96-2.96l.06-.06a1.7 1.7 0 0 0 .34-1.87 1.7 1.7 0 0 0-1.55-1.03H4a2.1 2.1 0 1 1 0-4.2h.09a1.7 1.7 0 0 0 1.55-1.1 1.7 1.7 0 0 0-.34-1.87l-.06-.06A2.1 2.1 0 1 1 8.2 4.15l.06.06a1.7 1.7 0 0 0 1.87.34H10.2a1.7 1.7 0 0 0 1.03-1.55V3a2.1 2.1 0 1 1 4.2 0v.09a1.7 1.7 0 0 0 1.03 1.55 1.7 1.7 0 0 0 1.87-.34l.06-.06a2.1 2.1 0 1 1 2.96 2.96l-.06.06a1.7 1.7 0 0 0-.34 1.87V9.2a1.7 1.7 0 0 0 1.55 1.03H21a2.1 2.1 0 1 1 0 4.2h-.09a1.7 1.7 0 0 0-1.55 1.03Z" />
                    </svg>
                    Settings
                </a>
            </nav>

            <div class="divider pt-3 mt-3" style="border-color:var(--line-dark);">
                <div class="d-flex align-items-center gap-2">
                    <div class="rounded-circle" style="width:32px;height:32px;background:var(--rope);flex-shrink:0;">
                    </div>
                    <div class="text-truncate">
                        <div class="text-white" style="font-size:0.88rem;">Priya Menon</div>
                        <div class="text-truncate" style="font-size:0.75rem;">Fernway workspace</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main -->
        <main class="dash-main">
            <div class="dash-topbar">
                <button class="btn btn-outline-ink btn-sm d-lg-none" id="sidebarToggle" type="button">Menu</button>
                <input type="search" class="form-control" style="max-width:320px;" placeholder="Search links...">
                <div class="ms-auto d-flex gap-2">
                    <button class="btn btn-outline-ink btn-sm">Import</button>
                    <button class="btn btn-rope btn-sm" data-bs-toggle="modal" data-bs-target="#createLinkModal">+
                        Create link</button>
                </div>
            </div>

            @yield('content')
        </main>
    </div>

    <!-- Create link modal -->
    <div class="modal fade" id="createLinkModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:var(--radius-md);">
                <div class="modal-header">
                    <h5 class="modal-title">Create a new link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Destination URL</label>
                        <input type="url" class="form-control" placeholder="https://your-site.com/page">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Short link</label>
                        <div class="input-group">
                            <span class="input-group-text mono"
                                style="background:var(--paper-dim); border-color:var(--line);">knot.to/</span>
                            <input type="text" class="form-control mono" placeholder="custom-slug">
                        </div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Campaign</label>
                        <select class="form-select">
                            <option>No campaign</option>
                            <option>Spring launch</option>
                            <option>Newsletter</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-ink" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-rope">Create link</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/js/app.js"></script>
    <script src="{{ url('/') }}/assets/js/jquery-4.0.0.min.js"></script>
    @stack('scripts')
</body>

</html>
