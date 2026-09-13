@extends('layouts.app')
@section('title', 'Features')
@section('meta_description', 'This is features page')
@section('content')
<header class="container py-5">
  <div class="row">
    <div class="col-lg-7">
      <p class="feature-tag mb-2">everything a link can do</p>
      <h1 class="display-4 mb-3">Built for the whole life of a link.</h1>
      <p class="lede">Shortening is the easy part. Knot handles the branding, the routing, and the reporting that come after someone actually clicks.</p>
    </div>
  </div>
</header>

<section>
  <div class="container">

    <div class="row feature-row align-items-center gy-4">
      <div class="col-lg-5">
        <p class="feature-tag mb-2">01 &nbsp;custom short links</p>
        <h3 class="mb-3">Say exactly what the link is.</h3>
        <p class="text-soft mb-3">Replace a random string with a slug that means something: <span class="mono">/summer-sale</span> instead of <span class="mono">/x9k2p</span>. Add UTM parameters automatically so every link arrives pre-tagged for your analytics.</p>
        <ul class="list-unstyled text-soft d-grid gap-2">
          <li>&mdash; Custom slugs, up to 40 characters</li>
          <li>&mdash; Auto-applied UTM templates</li>
          <li>&mdash; Bulk creation from a spreadsheet</li>
        </ul>
      </div>
      <div class="col-lg-7">
        <div class="mockframe">
          <div class="mockframe-bar"><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-url">new link</span></div>
          <div class="p-4">
            <label class="form-label">Destination URL</label>
            <input class="form-control mb-3" value="https://northwind.com/products/summer-sale-2026" readonly>
            <label class="form-label">Short link</label>
            <div class="input-group">
              <span class="input-group-text mono" style="background:var(--paper-dim); border-color:var(--line);">knot.to/</span>
              <input class="form-control mono" value="summer-sale" readonly>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row feature-row align-items-center gy-4 flex-lg-row-reverse">
      <div class="col-lg-5">
        <p class="feature-tag mb-2">02 &nbsp;branded domains</p>
        <h3 class="mb-3">Links that carry your name.</h3>
        <p class="text-soft mb-3">Point any domain or subdomain you own at Knot and every short link inherits it automatically. SSL is issued and renewed for you.</p>
        <ul class="list-unstyled text-soft d-grid gap-2">
          <li>&mdash; Unlimited domains on paid plans</li>
          <li>&mdash; Automatic SSL certificates</li>
          <li>&mdash; Per-domain default slug rules</li>
        </ul>
      </div>
      <div class="col-lg-7">
        <div class="mockframe">
          <div class="mockframe-bar"><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-url">domains</span></div>
          <div class="p-4">
            <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color:var(--line)!important;"><span class="mono">go.northwind.com</span><span class="badge-tag">verified</span></div>
            <div class="d-flex justify-content-between align-items-center py-2"><span class="mono">links.harborlight.io</span><span class="badge-tag">verified</span></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row feature-row align-items-center gy-4">
      <div class="col-lg-5">
        <p class="feature-tag mb-2">03 &nbsp;click analytics</p>
        <h3 class="mb-3">See the click, not just the count.</h3>
        <p class="text-soft mb-3">Every click records location, device, referrer, and timestamp. Filter by date range or channel and export the raw data whenever you need it.</p>
        <ul class="list-unstyled text-soft d-grid gap-2">
          <li>&mdash; Real-time click feed</li>
          <li>&mdash; Geographic and device breakdowns</li>
          <li>&mdash; CSV export and API access</li>
        </ul>
      </div>
      <div class="col-lg-7">
        <div class="mockframe">
          <div class="mockframe-bar"><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-url">clicks &middot; last 7 days</span></div>
          <div class="p-4">
            <div class="bar-chart mb-2">
              <div class="bar" style="height:30%"></div><div class="bar" style="height:48%"></div><div class="bar" style="height:38%"></div>
              <div class="bar" style="height:62%"></div><div class="bar is-peak" style="height:95%"></div><div class="bar" style="height:70%"></div><div class="bar" style="height:52%"></div>
            </div>
            <div class="d-flex justify-content-between text-faint" style="font-size:0.75rem;">
              <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row feature-row align-items-center gy-4 flex-lg-row-reverse">
      <div class="col-lg-5">
        <p class="feature-tag mb-2">04 &nbsp;QR codes</p>
        <h3 class="mb-3">The same link, printable.</h3>
        <p class="text-soft mb-3">Every short link comes with a generated QR code, styled with your brand color, ready for packaging, posters, or a storefront window.</p>
        <ul class="list-unstyled text-soft d-grid gap-2">
          <li>&mdash; Custom colors and logo overlay</li>
          <li>&mdash; SVG and PNG export</li>
          <li>&mdash; Scans tracked as clicks</li>
        </ul>
      </div>
      <div class="col-lg-7 d-flex justify-content-center">
        <div class="mockframe" style="width:200px;">
          <div class="mockframe-bar"><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-dot"></span></div>
          <div class="p-4 text-center">
            <svg viewBox="0 0 100 100" width="100" height="100" class="mb-2">
              <rect width="100" height="100" fill="var(--paper-dim)"/>
              <rect x="10" y="10" width="20" height="20" fill="var(--ink)"/>
              <rect x="70" y="10" width="20" height="20" fill="var(--ink)"/>
              <rect x="10" y="70" width="20" height="20" fill="var(--ink)"/>
              <rect x="40" y="10" width="8" height="8" fill="var(--ink)"/>
              <rect x="40" y="40" width="20" height="20" fill="var(--rope)"/>
              <rect x="70" y="40" width="8" height="8" fill="var(--ink)"/>
              <rect x="40" y="70" width="8" height="8" fill="var(--ink)"/>
              <rect x="55" y="70" width="8" height="8" fill="var(--ink)"/>
              <rect x="70" y="70" width="8" height="20" fill="var(--ink)"/>
            </svg>
            <div class="mono text-faint" style="font-size:0.75rem;">knot.to/summer-sale</div>
          </div>
        </div>
      </div>
    </div>

    <div class="row feature-row align-items-center gy-4">
      <div class="col-lg-5">
        <p class="feature-tag mb-2">05 &nbsp;team workspaces</p>
        <h3 class="mb-3">One workspace, every teammate.</h3>
        <p class="text-soft mb-3">Invite your team into shared folders of links, assign roles, and keep a full audit trail of who created or edited what.</p>
        <ul class="list-unstyled text-soft d-grid gap-2">
          <li>&mdash; Role-based permissions</li>
          <li>&mdash; Shared link folders by campaign</li>
          <li>&mdash; Full activity log</li>
        </ul>
      </div>
      <div class="col-lg-7">
        <div class="mockframe">
          <div class="mockframe-bar"><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-url">team</span></div>
          <div class="p-4">
            <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color:var(--line)!important;"><span>Priya Menon</span><span class="badge-tag">admin</span></div>
            <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color:var(--line)!important;"><span>Sam Whitaker</span><span class="badge-tag">editor</span></div>
            <div class="d-flex justify-content-between align-items-center py-2"><span>Alex Duarte</span><span class="badge-tag">viewer</span></div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="py-5" style="background:var(--ink); color:var(--paper); position:relative; overflow:hidden;">
  <div style="position:absolute;top:-50%;right:-20%;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(232,93,38,0.1) 0%,transparent 70%);pointer-events:none;"></div>
  <div class="container text-center py-3">
    <h2 class="display-6 mb-3" style="color:var(--paper);">See it work on your own links.</h2>
    <a href="signup.html" class="btn btn-rope btn-lg">Start for free</a>
  </div>
</section>
@endsection