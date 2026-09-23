@extends('layouts.app')
@section('title', 'Knot — Shorten, brand, and track every link')
@section('meta_description', 'Knot — Shorten, brand, and track every link')
@section('content')
{{-- Page-specific CSS --}}
@push('styles')
    <style>
        /*    .page-title {
            color: #0d6efd;
            font-weight: 700;
        }*/
    </style>
@endpush
<!-- Hero -->
<header class="container py-5 py-lg-6">
    <div class="row align-items-center gy-5 pt-4">
        <div class="col-lg-6">
            <p class="feature-tag mb-3 animate-in">knot.to/ &middot; link management</p>
            <h1 class="display-3 mb-4 animate-in animate-in-delay-1">Every link,<br>tied down.</h1>
            <p class="lede mb-4 animate-in animate-in-delay-2">Knot shortens your links, wraps them in your own
                domain, and tells you who clicked, from where, and on what — so a URL stops being disposable and
                starts being data.</p>

            <div class="mb-3 animate-in animate-in-delay-2">
                <div class="btn-group mb-2" role="tablist">
                    <button class="btn btn-sm btn-rope active" id="shortenTab" type="button" data-bs-toggle="tab"
                        data-bs-target="#shortenPanel">Shorten URL</button>
                    <button class="btn btn-sm btn-outline-ink" id="qrTab" type="button" data-bs-toggle="tab"
                        data-bs-target="#qrPanel">Create QR</button>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="shortenPanel">
                        <form id="demoShortenForm">
                            <div class="demo-bar">
                                <input id="demoShortenInput" type="url"
                                    placeholder="https://your-site.com/a/very/long/campaign/path" required>
                                <button class="btn btn-ink m-1" type="submit">Shorten it</button>
                            </div>
                        </form>
                        <div id="demoShortenResult" class="d-none mt-2">
                            <span class="demo-result">
                                <span class="js-short-url">knot.to/x7f2a</span>
                                <button class="btn btn-sm btn-outline-ink py-0 px-2"
                                    data-copy-text="https://knot.to/x7f2a" type="button">Copy</button>
                            </span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="qrPanel">
                        <form id="demoQrForm">
                            <div class="demo-bar">
                                <input id="demoQrInput" type="url" placeholder="https://your-site.com/page"
                                    required>
                                <button class="btn btn-ink m-1" type="submit">Generate QR</button>
                            </div>
                        </form>
                        <div id="demoQrResult" class="d-none text-center mt-2">
                            <div class="d-inline-block p-3 border rounded" style="border-color:var(--line);">
                                <svg viewBox="0 0 120 120" width="100" height="100">
                                    <rect width="120" height="120" fill="var(--paper-dim)" />
                                    <rect x="16" y="16" width="28" height="28" fill="var(--ink)" />
                                    <rect x="76" y="16" width="28" height="28" fill="var(--ink)" />
                                    <rect x="16" y="76" width="28" height="28" fill="var(--ink)" />
                                    <rect x="24" y="24" width="6" height="6" fill="var(--paper-dim)" />
                                    <rect x="84" y="24" width="6" height="6" fill="var(--paper-dim)" />
                                    <rect x="24" y="84" width="6" height="6" fill="var(--paper-dim)" />
                                    <rect x="36" y="36" width="10" height="10" fill="var(--rope)" />
                                    <rect x="82" y="36" width="10" height="10" fill="var(--ink)" />
                                    <rect x="36" y="82" width="10" height="10" fill="var(--ink)" />
                                    <rect x="50" y="50" width="8" height="8" fill="var(--ink)" />
                                </svg>
                            </div>
                            <span class="demo-result mt-2 d-inline-flex">
                                <span class="js-qr-url">knot.to/qr-x7f2a</span>
                                <button class="btn btn-sm btn-outline-ink py-0 px-2"
                                    data-copy-text="https://knot.to/qr-x7f2a" type="button">Copy</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center gap-4 mt-3 text-faint animate-in animate-in-delay-2"
                style="font-size:0.9rem;">
                <span>No credit card</span>
                <span class="divider-v" style="height:14px;"></span>
                <span>50 free links / month</span>
            </div>
        </div>

        <div class="col-lg-6 animate-in animate-in-delay-3">
            <div class="mockframe shadow-none position-relative">
                <div class="mockframe-bar">
                    <span class="mockframe-dot"></span><span class="mockframe-dot"></span><span
                        class="mockframe-dot"></span>
                    <span class="mockframe-url">app.knot.to/links</span>
                </div>
                <div class="p-3 p-md-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="mb-0">Spring launch campaign</h6>
                        <span class="badge-tag">active</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom"
                        style="border-color:var(--line)!important;">
                        <span class="link-row-url text-soft">knot.to/spring-launch</span>
                        <span class="fw-semibold">4,208 clicks</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom"
                        style="border-color:var(--line)!important;">
                        <span class="link-row-url text-soft">knot.to/spring-email</span>
                        <span class="fw-semibold">1,933 clicks</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-2 mb-3">
                        <span class="link-row-url text-soft">knot.to/spring-ig-bio</span>
                        <span class="fw-semibold">6,714 clicks</span>
                    </div>
                    <div class="bar-chart">
                        <div class="bar" style="height:35%"></div>
                        <div class="bar" style="height:55%"></div>
                        <div class="bar" style="height:40%"></div>
                        <div class="bar" style="height:70%"></div>
                        <div class="bar is-peak" style="height:100%"></div>
                        <div class="bar" style="height:60%"></div>
                        <div class="bar" style="height:45%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Trusted-by marquee -->
<section class="py-4 divider">
    <div class="container">
        <p class="text-center text-faint mb-3" style="font-size:0.85rem;">Teams sending links at</p>
        <div class="d-flex flex-wrap justify-content-center gap-4 gap-md-5 marquee-track"
            style="white-space:normal; justify-content:center;">
            <span>Northwind</span><span>Vellum&nbsp;Co.</span><span>Atlas Studio</span><span>Plumb &amp;
                Co</span><span>Fernway</span><span>Harbor Light</span>
        </div>
    </div>
</section>

<!-- How it works -->
<section class="py-5 py-lg-6">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="display-6 mb-3">From long link to full picture, in three steps.</h2>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-md-4">
                <div class="d-flex gap-3 stagger-item">
                    <span class="step-num">1</span>
                    <div>
                        <h5>Paste your link</h5>
                        <p class="text-soft mb-0">Drop in any URL — a product page, a PDF, a form. Knot works with
                            what you already have.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex gap-3 stagger-item">
                    <span class="step-num">2</span>
                    <div>
                        <h5>Brand and organize it</h5>
                        <p class="text-soft mb-0">Route it through your own domain, tag it by campaign, and set it
                            to expire whenever you want.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex gap-3 stagger-item">
                    <span class="step-num">3</span>
                    <div>
                        <h5>Watch it get clicked</h5>
                        <p class="text-soft mb-0">Live location, device, and referrer data lands in your dashboard
                            the moment someone taps it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature rows -->
<section class="divider" style="border-top:1px solid var(--line);">
    <div class="container">

        <div class="row feature-row align-items-center gy-4">
            <div class="col-lg-5">
                <p class="feature-tag mb-2">branded links</p>
                <h3 class="mb-3">Your domain, not ours.</h3>
                <p class="text-soft mb-3">A link that reads <span class="mono">yourbrand.co/deal</span> earns
                    more trust — and more clicks — than one from a stranger's domain. Connect any domain you own in
                    a few minutes.</p>
                <a href="features.html" class="fw-semibold text-rope">See how domains work &rarr;</a>
            </div>
            <div class="col-lg-7">
                <div class="mockframe">
                    <div class="mockframe-bar">
                        <span class="mockframe-dot"></span><span class="mockframe-dot"></span><span
                            class="mockframe-dot"></span>
                        <span class="mockframe-url">settings / domains</span>
                    </div>
                    <div class="p-3 p-md-4">
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom"
                            style="border-color:var(--line)!important;">
                            <span class="mono">go.northwind.com</span><span class="badge-tag">verified</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom"
                            style="border-color:var(--line)!important;">
                            <span class="mono">deals.plumbco.io</span><span class="badge-tag">verified</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <span class="mono">link.fernway.shop</span><span class="badge-tag"
                                style="background:var(--rope-tint); color:var(--rope-dark);">pending</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row feature-row align-items-center gy-4 flex-lg-row-reverse">
            <div class="col-lg-5">
                <p class="feature-tag mb-2">analytics</p>
                <h3 class="mb-3">Know who clicked, not just how many.</h3>
                <p class="text-soft mb-3">Location, device, referring page, and time of day — filterable and
                    exportable, so a click becomes something you can act on.</p>
                <a href="features.html" class="fw-semibold text-rope">Explore analytics &rarr;</a>
            </div>
            <div class="col-lg-7">
                <div class="mockframe">
                    <div class="mockframe-bar">
                        <span class="mockframe-dot"></span><span class="mockframe-dot"></span><span
                            class="mockframe-dot"></span>
                        <span class="mockframe-url">knot.to/spring-launch &middot; analytics</span>
                    </div>
                    <div class="p-3 p-md-4">
                        <div class="row text-center gy-3">
                            <div class="col-4">
                                <div class="stat-num" style="font-size:1.8rem;">61%</div>
                                <div class="text-faint" style="font-size:0.8rem;">mobile</div>
                            </div>
                            <div class="col-4">
                                <div class="stat-num" style="font-size:1.8rem;">2:14</div>
                                <div class="text-faint" style="font-size:0.8rem;">avg. time to click</div>
                            </div>
                            <div class="col-4">
                                <div class="stat-num" style="font-size:1.8rem;">18</div>
                                <div class="text-faint" style="font-size:0.8rem;">countries</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row feature-row align-items-center gy-4">
            <div class="col-lg-5">
                <p class="feature-tag mb-2">link-in-bio</p>
                <h3 class="mb-3">One link, your whole storefront.</h3>
                <p class="text-soft mb-3">Turn a single short link into a page of links — for a social bio, an
                    email signature, or a print flyer.</p>
                <a href="features.html" class="fw-semibold text-rope">See link-in-bio pages &rarr;</a>
            </div>
            <div class="col-lg-7">
                <div class="d-flex justify-content-center">
                    <div class="mockframe" style="width:220px;">
                        <div class="mockframe-bar"><span class="mockframe-dot"></span><span
                                class="mockframe-dot"></span><span class="mockframe-dot"></span></div>
                        <div class="p-3 text-center">
                            <div class="rounded-circle mx-auto mb-2"
                                style="width:52px;height:52px;background:var(--moss-tint);"></div>
                            <div class="fw-semibold mb-1" style="font-size:0.9rem;">@fernwayshop</div>
                            <div class="d-grid gap-2 mt-3">
                                <div class="border rounded py-2"
                                    style="border-color:var(--line)!important; font-size:0.8rem;">New arrivals
                                </div>
                                <div class="border rounded py-2"
                                    style="border-color:var(--line)!important; font-size:0.8rem;">Book a fitting
                                </div>
                                <div class="border rounded py-2"
                                    style="border-color:var(--line)!important; font-size:0.8rem;">Our story</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Stats -->
<section class="py-5 py-lg-6" style="background:var(--paper-dim);">
    <div class="container">
        <div class="row text-center gy-4">
            <div class="col-6 col-md-3">
                <div class="stat-num">2.4B</div>
                <p class="text-soft mb-0">links shortened</p>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-num">180+</div>
                <p class="text-soft mb-0">countries reached</p>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-num">99.99%</div>
                <p class="text-soft mb-0">redirect uptime</p>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-num">40ms</div>
                <p class="text-soft mb-0">average redirect time</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="py-5 py-lg-6">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <p class="testimonial-quote mb-4">We stopped guessing which channel drove signups. Knot just shows
                    us — down to the referring post.</p>
                <p class="fw-semibold mb-0">Priya Menon</p>
                <p class="text-faint">Head of Growth, Fernway</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA banner -->
<section class="py-5" style="background:var(--ink); color:var(--paper); position:relative; overflow:hidden;">
    <div
        style="position:absolute;top:-50%;right:-20%;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(232,93,38,0.1) 0%,transparent 70%);pointer-events:none;">
    </div>
    <div class="container text-center py-3">
        <h2 class="display-6 mb-3" style="color:var(--paper);">Start tying your links down today.</h2>
        <p class="mb-4" style="color:#B9C2BC;">Free for your first 50 links a month. No credit card.</p>
        <a href="signup.html" class="btn btn-rope btn-lg">Create your first link</a>
    </div>
</section>
@endsection

{{-- Page-specific JavaScript --}}
@push('scripts')
<script>
    // $( document ).ready(function() {
    //     console.log( "ready!" );
    // });
</script>
@endpush
