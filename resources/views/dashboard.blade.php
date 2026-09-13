<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard — Knot</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="dash-shell">

  <!-- Sidebar -->
  <aside class="dash-sidebar" id="dashSidebar">
    <a class="knot-logo mb-5" href="index.html">
      <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="3" y="12.5" width="15" height="9" rx="4.5" transform="rotate(-38 3 12.5)" stroke="currentColor" stroke-width="2.3"/>
        <rect x="14" y="9.5" width="15" height="9" rx="4.5" transform="rotate(-38 14 9.5)" stroke="currentColor" stroke-width="2.3"/>
      </svg>
      Knot
    </a>

    <nav class="d-grid gap-1 mb-auto">
<a class="dash-nav-link" href="dashboard.html">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="8" height="8" rx="1.5"/><rect x="13" y="3" width="8" height="5" rx="1.5"/><rect x="13" y="11" width="8" height="10" rx="1.5"/><rect x="3" y="14" width="8" height="7" rx="1.5"/></svg>
        Links
      </a>
      <a class="dash-nav-link active" href="dashboard-analytics.html">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20V10M12 20V4M20 20v-7"/></svg>
        Analytics
      </a>
      <a class="dash-nav-link" href="dashboard-qr.html">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="4" width="6" height="6"/><rect x="14" y="4" width="6" height="6"/><rect x="4" y="14" width="6" height="6"/><path d="M14 15h6M17 12v6"/></svg>
        QR codes
      </a>
      <a class="dash-nav-link" href="dashboard-bio.html">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="3.2"/><path d="M5 21c0-4 3-6.5 7-6.5s7 2.5 7 6.5"/></svg>
        Bio page
      </a>
      <a class="dash-nav-link" href="dashboard-team.html">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="3"/><path d="M2 20c0-3.3 3-6 7-6s7 2.7 7 6"/><circle cx="18" cy="9" r="2.4"/><path d="M17 14c2.8.3 5 2.4 5 5.5"/></svg>
        Team
      </a>
      <a class="dash-nav-link" href="dashboard-settings.html">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="3.2"/><path d="M19.4 13.5a1.7 1.7 0 0 0 .34 1.87l.06.06a2.1 2.1 0 1 1-2.96 2.96l-.06-.06a1.7 1.7 0 0 0-1.87-.34 1.7 1.7 0 0 0-1.03 1.55V20a2.1 2.1 0 1 1-4.2 0v-.09a1.7 1.7 0 0 0-1.1-1.55 1.7 1.7 0 0 0-.34-1.87l-.06-.06A2.1 2.1 0 1 1 8.2 4.15l.06.06a1.7 1.7 0 0 0 1.87.34H10.2a1.7 1.7 0 0 0 1.03-1.55V3a2.1 2.1 0 1 1 4.2 0v.09a1.7 1.7 0 0 0 1.03 1.55 1.7 1.7 0 0 0 1.87-.34l.06-.06a2.1 2.1 0 1 1 2.96 2.96l-.06.06a1.7 1.7 0 0 0-.34 1.87V9.2a1.7 1.7 0 0 0 1.55 1.03H21a2.1 2.1 0 1 1 0 4.2h-.09a1.7 1.7 0 0 0-1.55 1.03Z"/></svg>
        Settings
      </a>
      <a class="dash-nav-link" href="#">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20V10M12 20V4M20 20v-7"/></svg>
        Analytics
      </a>
      <a class="dash-nav-link" href="#">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="4" width="6" height="6"/><rect x="14" y="4" width="6" height="6"/><rect x="4" y="14" width="6" height="6"/><path d="M14 15h6M17 12v6"/></svg>
        QR codes
      </a>
      <a class="dash-nav-link" href="#">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="3.2"/><path d="M5 21c0-4 3-6.5 7-6.5s7 2.5 7 6.5"/></svg>
        Bio page
      </a>
      <a class="dash-nav-link" href="#">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="3"/><path d="M2 20c0-3.3 3-6 7-6s7 2.7 7 6"/><circle cx="18" cy="9" r="2.4"/><path d="M17 14c2.8.3 5 2.4 5 5.5"/></svg>
        Team
      </a>
      <a class="dash-nav-link" href="#">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="3.2"/><path d="M19.4 13.5a1.7 1.7 0 0 0 .34 1.87l.06.06a2.1 2.1 0 1 1-2.96 2.96l-.06-.06a1.7 1.7 0 0 0-1.87-.34 1.7 1.7 0 0 0-1.03 1.55V20a2.1 2.1 0 1 1-4.2 0v-.09a1.7 1.7 0 0 0-1.1-1.55 1.7 1.7 0 0 0-1.87.34l-.06.06a2.1 2.1 0 1 1-2.96-2.96l.06-.06a1.7 1.7 0 0 0 .34-1.87 1.7 1.7 0 0 0-1.55-1.03H4a2.1 2.1 0 1 1 0-4.2h.09a1.7 1.7 0 0 0 1.55-1.1 1.7 1.7 0 0 0-.34-1.87l-.06-.06A2.1 2.1 0 1 1 8.2 4.15l.06.06a1.7 1.7 0 0 0 1.87.34H10.2a1.7 1.7 0 0 0 1.03-1.55V3a2.1 2.1 0 1 1 4.2 0v.09a1.7 1.7 0 0 0 1.03 1.55 1.7 1.7 0 0 0 1.87-.34l.06-.06a2.1 2.1 0 1 1 2.96 2.96l-.06.06a1.7 1.7 0 0 0-.34 1.87V9.2a1.7 1.7 0 0 0 1.55 1.03H21a2.1 2.1 0 1 1 0 4.2h-.09a1.7 1.7 0 0 0-1.55 1.03Z"/></svg>
        Settings
      </a>
    </nav>

    <div class="divider pt-3 mt-3" style="border-color:var(--line-dark);">
      <div class="d-flex align-items-center gap-2">
        <div class="rounded-circle" style="width:32px;height:32px;background:var(--rope);flex-shrink:0;"></div>
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
        <button class="btn btn-rope btn-sm" data-bs-toggle="modal" data-bs-target="#createLinkModal">+ Create link</button>
      </div>
    </div>

    <div class="dash-content">

      <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-2">
        <div>
          <h2 class="h3 mb-1">Good afternoon, Priya.</h2>
          <p class="text-soft mb-0">Here's what happened across your links this week.</p>
        </div>
      </div>

      <div class="row gy-3 mb-4">
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Total clicks</div>
            <div class="stat-num" style="font-size:1.9rem;">18,204</div>
            <div class="text-moss" style="font-size:0.8rem;">&#8599; 12.4% vs last week</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Active links</div>
            <div class="stat-num" style="font-size:1.9rem;">142</div>
            <div class="text-faint" style="font-size:0.8rem;">7 created this week</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">QR scans</div>
            <div class="stat-num" style="font-size:1.9rem;">1,096</div>
            <div class="text-moss" style="font-size:0.8rem;">&#8599; 4.1% vs last week</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Links used</div>
            <div class="stat-num" style="font-size:1.9rem;">142<span class="text-faint" style="font-size:1rem;">/5,000</span></div>
            <div class="text-faint" style="font-size:0.8rem;">Growth plan</div>
          </div>
        </div>
      </div>

      <div class="row gy-3 mb-4">
        <div class="col-lg-8">
          <div class="stat-tile h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="mb-0">Clicks, last 7 days</h6>
              <span class="text-faint" style="font-size:0.8rem;">by day</span>
            </div>
            <div class="bar-chart">
              <div class="bar" style="height:32%"></div>
              <div class="bar" style="height:50%"></div>
              <div class="bar" style="height:41%"></div>
              <div class="bar" style="height:66%"></div>
              <div class="bar is-peak" style="height:100%"></div>
              <div class="bar" style="height:74%"></div>
              <div class="bar" style="height:58%"></div>
            </div>
            <div class="d-flex justify-content-between text-faint mt-2" style="font-size:0.75rem;">
              <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="stat-tile h-100">
            <h6 class="mb-3">Top referrers</h6>
            <div class="d-grid gap-3">
              <div class="d-flex justify-content-between"><span class="text-soft">Instagram bio</span><span class="fw-semibold">6,714</span></div>
              <div class="d-flex justify-content-between"><span class="text-soft">Email campaign</span><span class="fw-semibold">4,208</span></div>
              <div class="d-flex justify-content-between"><span class="text-soft">Direct / QR</span><span class="fw-semibold">1,933</span></div>
              <div class="d-flex justify-content-between"><span class="text-soft">Twitter / X</span><span class="fw-semibold">812</span></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Links table -->
      <div class="stat-tile p-0">
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom" style="border-color:var(--line)!important;">
          <h6 class="mb-0">All links</h6>
          <select class="form-select form-select-sm" style="width:auto;">
            <option>All campaigns</option>
            <option>Spring launch</option>
            <option>Newsletter</option>
          </select>
        </div>
        <div class="table-responsive">
          <table class="table table-links mb-0">
            <thead>
              <tr class="text-faint" style="font-size:0.8rem;">
                <th class="ps-3">Link</th>
                <th>Destination</th>
                <th>Created</th>
                <th class="text-end">Clicks</th>
                <th class="pe-3"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="ps-3">
                  <div class="link-row-url">knot.to/spring-launch</div>
                  <span class="badge-tag">Spring launch</span>
                </td>
                <td class="text-soft text-truncate" style="max-width:220px;">northwind.com/products/spring...</td>
                <td class="text-soft">Sep 2</td>
                <td class="text-end fw-semibold">4,208</td>
                <td class="pe-3 text-end">
                  <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/spring-launch">Copy</button>
                </td>
              </tr>
              <tr>
                <td class="ps-3">
                  <div class="link-row-url">knot.to/spring-email</div>
                  <span class="badge-tag">Newsletter</span>
                </td>
                <td class="text-soft text-truncate" style="max-width:220px;">northwind.com/email/spring...</td>
                <td class="text-soft">Sep 3</td>
                <td class="text-end fw-semibold">1,933</td>
                <td class="pe-3 text-end">
                  <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/spring-email">Copy</button>
                </td>
              </tr>
              <tr>
                <td class="ps-3">
                  <div class="link-row-url">knot.to/spring-ig-bio</div>
                  <span class="badge-tag">Spring launch</span>
                </td>
                <td class="text-soft text-truncate" style="max-width:220px;">northwind.com/bio</td>
                <td class="text-soft">Sep 4</td>
                <td class="text-end fw-semibold">6,714</td>
                <td class="pe-3 text-end">
                  <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/spring-ig-bio">Copy</button>
                </td>
              </tr>
              <tr>
                <td class="ps-3">
                  <div class="link-row-url">knot.to/fall-preview</div>
                  <span class="badge-tag">Newsletter</span>
                </td>
                <td class="text-soft text-truncate" style="max-width:220px;">northwind.com/products/fall...</td>
                <td class="text-soft">Sep 9</td>
                <td class="text-end fw-semibold">812</td>
                <td class="pe-3 text-end">
                  <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/fall-preview">Copy</button>
                </td>
              </tr>
              <tr>
                <td class="ps-3">
                  <div class="link-row-url">knot.to/store-flyer</div>
                  <span class="badge-tag">In-store</span>
                </td>
                <td class="text-soft text-truncate" style="max-width:220px;">northwind.com/locations</td>
                <td class="text-soft">Sep 11</td>
                <td class="text-end fw-semibold">537</td>
                <td class="pe-3 text-end">
                  <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/store-flyer">Copy</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-between align-items-center p-3 border-top text-faint" style="border-color:var(--line)!important; font-size:0.85rem;">
          <span>Showing 5 of 142 links</span>
          <nav>
            <ul class="pagination pagination-sm mb-0">
              <li class="page-item disabled"><span class="page-link">Prev</span></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
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
            <span class="input-group-text mono" style="background:var(--paper-dim); border-color:var(--line);">knot.to/</span>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
