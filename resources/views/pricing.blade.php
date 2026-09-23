@extends('layouts.app')
@section('title', 'Support Knot — Donate & Keep It Free')
@section('meta_description', 'Support Knot — Donate & Keep It Free')
@section('content')
    <header class="container py-5 text-center">
        <p class="feature-tag mb-2 text-center">100% free, always</p>
        <h1 class="display-4 mb-3">Knot is free forever.</h1>
        <p class="lede mx-auto mb-4">No subscriptions, no hidden fees, no paywalls. Every feature is available to everyone,
            unconditionally. If Knot has made your life easier, consider a donation to help us keep the lights on.</p>
    </header>

    <section class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <div class="stat-num" style="font-size:3.5rem; color:var(--rope);">$0</div>
                <p class="text-soft mb-0" style="font-size:1.2rem;">That's right — completely free. No catches.</p>
            </div>
        </div>

        <div class="row gy-4 justify-content-center mb-5">
            <div class="col-md-6 col-lg-4">
                <div class="stat-tile text-center card-lift">
                    <div class="feature-icon rope mx-auto mb-3" style="width:56px;height:56px;margin:0 auto 1rem;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24"
                            height="24">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                        </svg>
                    </div>
                    <h5 class="mb-2">Free Forever</h5>
                    <p class="text-soft mb-0" style="font-size:0.9rem;">All features are free. No tier limits, no trial
                        periods. Use it as long as you need.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="stat-tile text-center card-lift">
                    <div class="feature-icon moss mx-auto mb-3" style="width:56px;height:56px;margin:0 auto 1rem;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24"
                            height="24">
                            <path d="M12 2L2 7l10 5 10-5-10-5z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h5 class="mb-2">Open & Transparent</h5>
                    <p class="text-soft mb-0" style="font-size:0.9rem;">No data selling, no ads, no tracking. Your links and
                        analytics belong to you.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="stat-tile text-center card-lift">
                    <div class="feature-icon ink mx-auto mb-3" style="width:56px;height:56px;margin:0 auto 1rem;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24"
                            height="24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h5 class="mb-2">Community Driven</h5>
                    <p class="text-soft mb-0" style="font-size:0.9rem;">Built by developers, for developers. Features are
                        shaped by real user needs.</p>
                </div>
            </div>
        </div>

        <hr class="section-divider mb-5">

        <h3 class="text-center mb-4">Why we need your support</h3>
        <p class="lede text-center mb-5" style="max-width:60ch;margin-left:auto;margin-right:auto;">Running a free service
            costs money — servers, domains, maintenance, and development time. Every donation directly funds keeping Knot
            alive and thriving.</p>

        <div class="row gy-4 mb-5">
            <div class="col-md-6">
                <div class="stat-tile">
                    <h5 class="mb-3">What your donation covers</h5>
                    <ul class="list-unstyled d-grid gap-3">
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-rope mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">Server & hosting costs</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Keeping the API fast and reliable
                                    around the clock.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-rope mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">Domain registration</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Maintaining knot.to and related
                                    domains.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-rope mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">SSL certificates</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Ensuring every link is served over
                                    HTTPS securely.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-rope mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">Development & maintenance</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Fixing bugs, adding features, and
                                    keeping everything up to date.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-rope mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">Community support</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Answering questions and helping users
                                    get the most out of Knot.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="stat-tile">
                    <h5 class="mb-3">Reasons to donate</h5>
                    <ul class="list-unstyled d-grid gap-3">
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-moss mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">You rely on it daily</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">If Knot is part of your workflow, a
                                    small donation keeps it going.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-moss mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">No ads, no tracking</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Your experience stays clean because
                                    donations replace the need for monetization.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-moss mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">Support open source</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Free tools only survive when the
                                    community backs them.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-moss mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">Help others</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Your contribution ensures students,
                                    hobbyists, and startups can keep using Knot without cost.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <span class="text-moss mt-1">&#10003;</span>
                            <div>
                                <span class="fw-semibold" style="font-size:0.95rem;">Peace of mind</span>
                                <p class="text-soft mb-0" style="font-size:0.85rem;">Knowing Knot will be maintained and
                                    improved for years to come.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mb-5">
            <h4 class="mb-3">Every contribution matters</h4>
            <p class="text-soft mb-4">Whether it's $1 or $100, your donation helps keep Knot free and independent.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <button class="btn btn-rope btn-lg" type="button"
                    onclick="showToast('Thank you for your $5 donation!')">$5</button>
                <button class="btn btn-rope btn-lg" type="button"
                    onclick="showToast('Thank you for your $10 donation!')">$10</button>
                <button class="btn btn-outline-ink btn-lg" type="button"
                    onclick="showToast('Thank you for your $25 donation!')">$25</button>
                <button class="btn btn-outline-ink btn-lg" type="button"
                    onclick="showToast('Thank you for your $50 donation!')">$50</button>
                <button class="btn btn-outline-ink btn-lg" type="button"
                    onclick="showToast('Thank you for your $100 donation!')">$100</button>
            </div>
            <p class="text-faint mt-3" style="font-size:0.85rem;">Or <a href="#"
                    class="text-rope fw-semibold">choose any amount</a></p>
        </div>

        <div class="stat-tile mb-5">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h5 class="mb-1">Knot is and always will be free</h5>
                    <p class="text-faint mb-0" style="font-size:0.9rem;">No subscription required. No premium tier. No
                        hidden costs. Donations are optional and never required to use the service.</p>
                </div>
                <a href="signup.html" class="btn btn-rope">Get Started Free</a>
            </div>
        </div>
    </section>

    <section class="py-5" style="background:var(--paper-dim);">
        <div class="container">
            <h3 class="text-center mb-4">Frequently asked questions</h3>
            <div class="accordion mx-auto" id="faq" style="max-width:760px;">
                <div class="accordion-item panel mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            Is Knot really completely free?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-soft">Yes! Every feature — shortening, branding, analytics, QR
                            codes, team workspaces — is available at no cost. No trial periods, no feature locks, no credit
                            card required.</div>
                    </div>
                </div>
                <div class="accordion-item panel mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            Why should I donate if it's free?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-soft">Donations help cover server costs, domain fees, and
                            development time. They ensure Knot remains free and independent without needing ads or data
                            collection to survive.</div>
                    </div>
                </div>
                <div class="accordion-item panel mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            Will Knot ever start charging?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-soft">No. Knot will always remain free. Donations are a way to
                            support the project, not a paywall. Your access will never be restricted.</div>
                    </div>
                </div>
                <div class="accordion-item panel mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            What if I can't afford to donate?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-soft">That's completely fine! Knot will always be free regardless.
                            Using the service, sharing it with others, and contributing feedback are all valuable forms of
                            support.</div>
                    </div>
                </div>
                <div class="accordion-item panel mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            How are donations used?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body text-soft">Every dollar goes directly toward hosting, domains, SSL
                            certificates, and development. There are no investors or shareholders — just people keeping a
                            free tool alive.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background:var(--ink); color:var(--paper); position:relative; overflow:hidden;">
        <div
            style="position:absolute;top:-50%;right:-20%;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(232,93,38,0.1) 0%,transparent 70%);pointer-events:none;">
        </div>
        <div class="container text-center py-3">
            <h2 class="display-6 mb-3" style="color:var(--paper);">Keep Knot free. Donate today.</h2>
            <p class="mb-4" style="color:#B9C2BC;">Every link you've shortened, every click you've tracked — it's all
                free because of you.</p>
            <a href="#" class="btn btn-rope btn-lg"
                onclick="showToast('Thank you for supporting Knot!'); return false;">Donate Now</a>
        </div>
    </section>
@endsection
