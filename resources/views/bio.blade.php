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
          <h2 class="h3 mb-1">Link-in-bio pages</h2>
          <p class="text-soft mb-0">Turn a single short link into a page of links for your social profiles.</p>
        </div>
      </div>

      <!-- Stats -->
      <div class="row gy-3 mb-4">
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Bio pages</div>
            <div class="stat-num" style="font-size:1.9rem;">3</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Total views</div>
            <div class="stat-num" style="font-size:1.9rem;">4,821</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Link clicks</div>
            <div class="stat-num" style="font-size:1.9rem;">1,204</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Avg. time on page</div>
            <div class="stat-num" style="font-size:1.9rem;">0:42</div>
          </div>
        </div>
      </div>

      <!-- Bio pages list -->
      <div class="row gy-3 mb-4">
        <div class="col-lg-8">
          <div class="stat-tile p-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom" style="border-color:var(--line)!important;">
              <h6 class="mb-0">Your bio pages</h6>
              <button class="btn btn-sm btn-rope" data-bs-toggle="modal" data-bs-target="#createBioModal">+ New</button>
            </div>
            <div class="table-responsive">
              <table class="table table-links mb-0">
                <thead>
                  <tr class="text-faint" style="font-size:0.8rem;">
                    <th class="ps-3">Page</th>
                    <th>Profile</th>
                    <th>Links</th>
                    <th class="text-end">Views</th>
                    <th class="text-end">Clicks</th>
                    <th class="pe-3"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="ps-3">
                      <div class="link-row-url">@fernwayshop</div>
                      <span class="badge-tag">Instagram</span>
                    </td>
                    <td class="text-soft">Fernway Shop</td>
                    <td>4</td>
                    <td class="text-end fw-semibold">3,210</td>
                    <td class="text-end fw-semibold">847</td>
                    <td class="pe-3 text-end">
                      <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/fernwayshop">Copy</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-3">
                      <div class="link-row-url">@fernwayco</div>
                      <span class="badge-tag">Twitter</span>
                    </td>
                    <td class="text-soft">Fernway Co.</td>
                    <td>3</td>
                    <td class="text-end fw-semibold">1,102</td>
                    <td class="text-end fw-semibold">234</td>
                    <td class="pe-3 text-end">
                      <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/fernwayco">Copy</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-3">
                      <div class="link-row-url">@fernwayblog</div>
                      <span class="badge-tag">Blog</span>
                    </td>
                    <td class="text-soft">Fernway Blog</td>
                    <td>6</td>
                    <td class="text-end fw-semibold">509</td>
                    <td class="text-end fw-semibold">123</td>
                    <td class="pe-3 text-end">
                      <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/fernwayblog">Copy</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Preview panel -->
        <div class="col-lg-4">
          <div class="stat-tile h-100">
            <h6 class="mb-3">Live preview</h6>
            <div class="d-flex justify-content-center">
              <div class="mockframe" style="width:240px;">
                <div class="mockframe-bar"><span class="mockframe-dot"></span><span class="mockframe-dot"></span><span class="mockframe-dot"></span></div>
                <div class="p-3 text-center">
                  <div class="rounded-circle mx-auto mb-2" style="width:56px;height:56px;background:var(--moss-tint);"></div>
                  <div class="fw-semibold mb-1" style="font-size:0.95rem;">@fernwayshop</div>
                  <div class="text-faint" style="font-size:0.78rem;">Fernway Shop</div>
                  <div class="d-grid gap-2 mt-3">
                    <div class="border rounded py-2" style="border-color:var(--line)!important; font-size:0.82rem;">New arrivals</div>
                    <div class="border rounded py-2" style="border-color:var(--line)!important; font-size:0.82rem;">Book a fitting</div>
                    <div class="border rounded py-2" style="border-color:var(--line)!important; font-size:0.82rem;">Our story</div>
                    <div class="border rounded py-2" style="border-color:var(--line)!important; font-size:0.82rem;">Contact us</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Create new bio page form -->
      <div class="stat-tile">
        <h6 class="mb-3">Create a new bio page</h6>
        <form onsubmit="return false;">
          <div class="row gy-3">
            <div class="col-md-6">
              <label class="form-label">Profile name</label>
              <input type="text" class="form-control" placeholder="@yourhandle">
            </div>
            <div class="col-md-6">
              <label class="form-label">Platform</label>
              <select class="form-select">
                <option>Instagram</option>
                <option>Twitter / X</option>
                <option>TikTok</option>
                <option>LinkedIn</option>
                <option>Custom</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Display name</label>
              <input type="text" class="form-control" placeholder="Your Brand Name">
            </div>
            <div class="col-12">
              <label class="form-label">Bio text</label>
              <textarea class="form-control" rows="2" placeholder="A short description for your bio page..."></textarea>
            </div>
            <div class="col-12">
              <label class="form-label">Links</label>
              <div id="bioLinks" class="d-grid gap-2 mb-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Link title">
                  <input type="url" class="form-control" placeholder="https://...">
                  <button class="btn btn-outline-ink btn-sm" type="button" onclick="this.closest('.input-group').remove()">Remove</button>
                </div>
              </div>
              <button class="btn btn-sm btn-outline-ink" type="button" onclick="addBioLink()">+ Add link</button>
            </div>
            <div class="col-12">
              <label class="form-label">Theme color</label>
              <div class="d-flex gap-2">
                <div class="rounded-circle" style="width:32px;height:32px;background:var(--rope);border:2px solid var(--ink);"></div>
                <div class="rounded-circle" style="width:32px;height:32px;background:var(--moss);border:2px solid var(--ink);"></div>
                <div class="rounded-circle" style="width:32px;height:32px;background:var(--ink);border:2px solid var(--ink);"></div>
                <div class="rounded-circle" style="width:32px;height:32px;background:var(--line-dark);border:2px solid var(--ink);"></div>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-rope">Create bio page</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </main>
</div>

<!-- Create bio page modal -->
<div class="modal fade" id="createBioModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius:var(--radius-md);">
      <div class="modal-header">
        <h5 class="modal-title">Create a bio page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Profile handle</label>
          <input type="text" class="form-control" placeholder="@yourhandle">
        </div>
        <div class="mb-3">
          <label class="form-label">Platform</label>
          <select class="form-select">
            <option>Instagram</option>
            <option>Twitter / X</option>
            <option>TikTok</option>
            <option>LinkedIn</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Display name</label>
          <input type="text" class="form-control" placeholder="Your Brand Name">
        </div>
        <div class="mb-3">
          <label class="form-label">Bio text</label>
          <textarea class="form-control" rows="2" placeholder="A short description..."></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-ink" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-rope">Create</button>
      </div>
    </div>
  </div>
</div>


@endsection
{{-- Page-specific JavaScript --}}
@push('scripts')
<script>
function addBioLink() {
  var container = document.getElementById('bioLinks');
  var div = document.createElement('div');
  div.className = 'input-group';
  div.innerHTML = '<input type="text" class="form-control" placeholder="Link title"><input type="url" class="form-control" placeholder="https://..."><button class="btn btn-outline-ink btn-sm" type="button" onclick="this.closest(\'.input-group\').remove()">Remove</button>';
  container.appendChild(div);
}
</script>
@endpush
