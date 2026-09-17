@extends('layouts.dash')
@section('title', 'Knot — Shorten, brand, and track every link')
@section('meta_description', 'Knot — Shorten, brand, and track every link')
@section('content')
{{-- Page-specific CSS --}}
@push('styles')
@endpush
  <div class="dash-content">

    <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-2">
      <div>
        <h2 class="h3 mb-1">Settings</h2>
        <p class="text-soft mb-0">Manage your account, workspace, and preferences.</p>
      </div>
    </div>

    <!-- Account settings -->
    <div class="stat-tile mb-4">
      <h6 class="mb-3 pb-2" style="border-bottom:1px solid var(--line);">Account</h6>
      <form onsubmit="return false;">
        <div class="row gy-3">
          <div class="col-md-6">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" value="Priya">
          </div>
          <div class="col-md-6">
            <label class="form-label">Last name</label>
            <input type="text" class="form-control" value="Menon">
          </div>
          <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="priya@fernway.com">
          </div>
          <div class="col-12">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter new password to change">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-rope">Save changes</button>
          </div>
        </div>
      </form>
    </div>

    <!-- Workspace settings -->
    <div class="stat-tile mb-4">
      <h6 class="mb-3 pb-2" style="border-bottom:1px solid var(--line);">Workspace</h6>
      <form onsubmit="return false;">
        <div class="row gy-3">
          <div class="col-md-6">
            <label class="form-label">Workspace name</label>
            <input type="text" class="form-control" value="Fernway workspace">
          </div>
          <div class="col-md-6">
            <label class="form-label">Default campaign</label>
            <select class="form-select">
              <option>Spring launch</option>
              <option>Newsletter</option>
              <option>In-store</option>
              <option>No campaign</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label">Timezone</label>
            <select class="form-select">
              <option>Eastern Time (ET)</option>
              <option>Central Time (CT)</option>
              <option>Pacific Time (PT)</option>
              <option>GMT</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label">Language</label>
            <select class="form-select">
              <option>English</option>
              <option>Spanish</option>
              <option>French</option>
              <option>German</option>
            </select>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-rope">Save workspace</button>
          </div>
        </div>
      </form>
    </div>

    <!-- Domains -->
    <div class="stat-tile mb-4">
      <h6 class="mb-3 pb-2" style="border-bottom:1px solid var(--line);">Branded domains</h6>
      <div class="table-responsive">
        <table class="table table-links mb-0">
          <thead>
            <tr class="text-faint" style="font-size:0.8rem;">
              <th class="ps-3">Domain</th>
              <th>Status</th>
              <th>Default slug</th>
              <th class="pe-3"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ps-3"><span class="mono">go.northwind.com</span></td>
              <td><span class="badge-tag">verified</span></td>
              <td class="text-soft">/promo</td>
              <td class="pe-3 text-end"><button class="btn btn-sm btn-outline-ink">Edit</button></td>
            </tr>
            <tr>
              <td class="ps-3"><span class="mono">deals.plumbco.io</span></td>
              <td><span class="badge-tag">verified</span></td>
              <td class="text-soft">/deal</td>
              <td class="pe-3 text-end"><button class="btn btn-sm btn-outline-ink">Edit</button></td>
            </tr>
            <tr>
              <td class="ps-3"><span class="mono">link.fernway.shop</span></td>
              <td><span class="badge-tag" style="background:var(--rope-tint); color:var(--rope-dark);">pending</span></td>
              <td class="text-soft">/shop</td>
              <td class="pe-3 text-end"><button class="btn btn-sm btn-outline-ink">Edit</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Notifications -->
    <div class="stat-tile mb-4">
      <h6 class="mb-3 pb-2" style="border-bottom:1px solid var(--line);">Notifications</h6>
      <div class="d-grid gap-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" checked id="notifClicks">
          <label class="form-check-label" for="notifClicks">Weekly click summary</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" checked id="notifScans">
          <label class="form-check-label" for="notifScans">QR scan alerts</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="notifLinks">
          <label class="form-check-label" for="notifLinks">New link created</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" checked id="notifTeam">
          <label class="form-check-label" for="notifTeam">Team activity updates</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="notifBilling">
          <label class="form-check-label" for="notifBilling">Billing reminders</label>
        </div>
      </div>
    </div>

    <!-- Danger zone -->
    <div class="stat-tile" style="border-color:var(--rope-dark);">
      <h6 class="mb-3" style="color:var(--rope-dark);">Danger zone</h6>
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div>
          <div class="fw-semibold" style="font-size:0.9rem;">Delete workspace</div>
          <p class="text-faint mb-0" style="font-size:0.82rem;">Permanently delete your workspace and all associated data.</p>
        </div>
        <button class="btn btn-sm btn-outline-ink" style="color:var(--rope-dark); border-color:var(--rope-dark);">Delete workspace</button>
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
@endsection