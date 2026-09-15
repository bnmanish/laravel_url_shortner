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
          <h2 class="h3 mb-1">QR codes</h2>
          <p class="text-soft mb-0">Printable QR codes for your short links, styled with your brand.</p>
        </div>
      </div>

      <!-- Stats -->
      <div class="row gy-3 mb-4">
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Total QR codes</div>
            <div class="stat-num" style="font-size:1.9rem;">24</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Total scans</div>
            <div class="stat-num" style="font-size:1.9rem;">1,096</div>
            <div class="text-moss" style="font-size:0.8rem;">&#8599; 4.1% vs last week</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Scans today</div>
            <div class="stat-num" style="font-size:1.9rem;">47</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-tile">
            <div class="text-faint mb-1" style="font-size:0.82rem;">Custom branded</div>
            <div class="stat-num" style="font-size:1.9rem">8</div>
            <div class="text-faint" style="font-size:0.8rem;">with logo overlay</div>
          </div>
        </div>
      </div>

      <!-- QR grid -->
      <div class="row gy-3 mb-4">
        <div class="col-lg-8">
          <div class="stat-tile p-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom" style="border-color:var(--line)!important;">
              <h6 class="mb-0">All QR codes</h6>
              <select class="form-select form-select-sm" style="width:auto;">
                <option>All links</option>
                <option>Spring launch</option>
                <option>Newsletter</option>
                <option>In-store</option>
              </select>
            </div>
            <div class="table-responsive">
              <table class="table table-links mb-0">
                <thead>
                  <tr class="text-faint" style="font-size:0.8rem;">
                    <th class="ps-3">QR Code</th>
                    <th>Linked to</th>
                    <th>Scans</th>
                    <th>Created</th>
                    <th class="text-end">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="ps-3">
                      <div class="d-flex align-items-center gap-2">
                        <svg viewBox="0 0 60 60" width="36" height="36" style="flex-shrink:0;">
                          <rect width="60" height="60" fill="var(--paper-dim)"/>
                          <rect x="8" y="8" width="14" height="14" fill="var(--ink)"/>
                          <rect x="38" y="8" width="14" height="14" fill="var(--ink)"/>
                          <rect x="8" y="38" width="14" height="14" fill="var(--ink)"/>
                          <rect x="14" y="14" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="44" y="14" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="14" y="44" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="24" y="24" width="6" height="6" fill="var(--rope)"/>
                        </svg>
                        <div class="link-row-url">knot.to/spring-ig-bio</div>
                      </div>
                    </td>
                    <td class="text-soft">Instagram bio</td>
                    <td class="fw-semibold">6,714</td>
                    <td class="text-soft">Sep 4</td>
                    <td class="text-end">
                      <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/spring-ig-bio">Copy</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-3">
                      <div class="d-flex align-items-center gap-2">
                        <svg viewBox="0 0 60 60" width="36" height="36" style="flex-shrink:0;">
                          <rect width="60" height="60" fill="var(--paper-dim)"/>
                          <rect x="8" y="8" width="14" height="14" fill="var(--ink)"/>
                          <rect x="38" y="8" width="14" height="14" fill="var(--ink)"/>
                          <rect x="8" y="38" width="14" height="14" fill="var(--ink)"/>
                          <rect x="14" y="14" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="44" y="14" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="14" y="44" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="24" y="24" width="6" height="6" fill="var(--rope)"/>
                        </svg>
                        <div class="link-row-url">knot.to/spring-launch</div>
                      </div>
                    </td>
                    <td class="text-soft">Spring launch</td>
                    <td class="fw-semibold">4,208</td>
                    <td class="text-soft">Sep 2</td>
                    <td class="text-end">
                      <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/spring-launch">Copy</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-3">
                      <div class="d-flex align-items-center gap-2">
                        <svg viewBox="0 0 60 60" width="36" height="36" style="flex-shrink:0;">
                          <rect width="60" height="60" fill="var(--paper-dim)"/>
                          <rect x="8" y="8" width="14" height="14" fill="var(--ink)"/>
                          <rect x="38" y="8" width="14" height="14" fill="var(--ink)"/>
                          <rect x="8" y="38" width="14" height="14" fill="var(--ink)"/>
                          <rect x="14" y="14" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="44" y="14" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="14" y="44" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="24" y="24" width="6" height="6" fill="var(--rope)"/>
                        </svg>
                        <div class="link-row-url">knot.to/store-flyer</div>
                      </div>
                    </td>
                    <td class="text-soft">In-store flyer</td>
                    <td class="fw-semibold">537</td>
                    <td class="text-soft">Sep 11</td>
                    <td class="text-end">
                      <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/store-flyer">Copy</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-3">
                      <div class="d-flex align-items-center gap-2">
                        <svg viewBox="0 0 60 60" width="36" height="36" style="flex-shrink:0;">
                          <rect width="60" height="60" fill="var(--paper-dim)"/>
                          <rect x="8" y="8" width="14" height="14" fill="var(--ink)"/>
                          <rect x="38" y="8" width="14" height="14" fill="var(--ink)"/>
                          <rect x="8" y="38" width="14" height="14" fill="var(--ink)"/>
                          <rect x="14" y="14" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="44" y="14" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="14" y="44" width="4" height="4" fill="var(--paper-dim)"/>
                          <rect x="24" y="24" width="6" height="6" fill="var(--rope)"/>
                        </svg>
                        <div class="link-row-url">knot.to/fall-preview</div>
                      </div>
                    </td>
                    <td class="text-soft">Fall preview</td>
                    <td class="fw-semibold">812</td>
                    <td class="text-soft">Sep 9</td>
                    <td class="text-end">
                      <button class="btn btn-sm btn-outline-ink" data-copy-text="https://knot.to/fall-preview">Copy</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- QR customization preview -->
        <div class="col-lg-4">
          <div class="stat-tile h-100">
            <h6 class="mb-3">Quick generate</h6>
            <div class="mb-3">
              <label class="form-label">Link</label>
              <select class="form-select mb-2">
                <option>knot.to/spring-ig-bio</option>
                <option>knot.to/spring-launch</option>
                <option>knot.to/spring-email</option>
                <option>knot.to/store-flyer</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Size</label>
              <select class="form-select">
                <option>200 x 200</option>
                <option>300 x 300</option>
                <option>500 x 500</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Color</label>
              <div class="d-flex gap-2">
                <div class="rounded-circle" style="width:28px;height:28px;background:var(--ink);border:2px solid var(--rope);" title="Ink"></div>
                <div class="rounded-circle" style="width:28px;height:28px;background:var(--rope);border:2px solid var(--rope);" title="Rope"></div>
                <div class="rounded-circle" style="width:28px;height:28px;background:var(--moss);border:2px solid var(--rope);" title="Moss"></div>
                <div class="rounded-circle" style="width:28px;height:28px;background:var(--line-dark);border:2px solid var(--rope);" title="Dark"></div>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="logoOverlay">
                <label class="form-check-label" for="logoOverlay">Add logo overlay</label>
              </div>
            </div>
            <button class="btn btn-rope w-100" data-bs-toggle="modal" data-bs-target="#createQrModal">Generate QR</button>
          </div>
        </div>
      </div>

      <!-- QR gallery -->
      <div class="stat-tile">
        <h6 class="mb-3">QR gallery — recent codes</h6>
        <div class="row gy-3">
          <div class="col-6 col-md-4 col-lg-3">
            <div class="text-center p-3 border rounded" style="border-color:var(--line);">
              <svg viewBox="0 0 120 120" width="100" height="100" class="mx-auto mb-2">
                <rect width="120" height="120" fill="var(--paper-dim)"/>
                <rect x="16" y="16" width="28" height="28" fill="var(--ink)"/>
                <rect x="76" y="16" width="28" height="28" fill="var(--ink)"/>
                <rect x="16" y="76" width="28" height="28" fill="var(--ink)"/>
                <rect x="24" y="24" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="84" y="24" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="24" y="84" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="36" y="36" width="10" height="10" fill="var(--rope)"/>
                <rect x="82" y="36" width="10" height="10" fill="var(--ink)"/>
                <rect x="36" y="82" width="10" height="10" fill="var(--ink)"/>
                <rect x="50" y="50" width="8" height="8" fill="var(--ink)"/>
              </svg>
              <div class="link-row-url" style="font-size:0.75rem;">spring-ig-bio</div>
              <div class="text-faint" style="font-size:0.75rem;">6,714 scans</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="text-center p-3 border rounded" style="border-color:var(--line);">
              <svg viewBox="0 0 120 120" width="100" height="100" class="mx-auto mb-2">
                <rect width="120" height="120" fill="var(--paper-dim)"/>
                <rect x="16" y="16" width="28" height="28" fill="var(--ink)"/>
                <rect x="76" y="16" width="28" height="28" fill="var(--ink)"/>
                <rect x="16" y="76" width="28" height="28" fill="var(--ink)"/>
                <rect x="24" y="24" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="84" y="24" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="24" y="84" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="36" y="36" width="10" height="10" fill="var(--rope)"/>
                <rect x="82" y="36" width="10" height="10" fill="var(--ink)"/>
                <rect x="36" y="82" width="10" height="10" fill="var(--ink)"/>
                <rect x="50" y="50" width="8" height="8" fill="var(--ink)"/>
              </svg>
              <div class="link-row-url" style="font-size:0.75rem;">spring-launch</div>
              <div class="text-faint" style="font-size:0.75rem;">4,208 scans</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="text-center p-3 border rounded" style="border-color:var(--line);">
              <svg viewBox="0 0 120 120" width="100" height="100" class="mx-auto mb-2">
                <rect width="120" height="120" fill="var(--paper-dim)"/>
                <rect x="16" y="16" width="28" height="28" fill="var(--ink)"/>
                <rect x="76" y="16" width="28" height="28" fill="var(--ink)"/>
                <rect x="16" y="76" width="28" height="28" fill="var(--ink)"/>
                <rect x="24" y="24" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="84" y="24" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="24" y="84" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="36" y="36" width="10" height="10" fill="var(--rope)"/>
                <rect x="82" y="36" width="10" height="10" fill="var(--ink)"/>
                <rect x="36" y="82" width="10" height="10" fill="var(--ink)"/>
                <rect x="50" y="50" width="8" height="8" fill="var(--ink)"/>
              </svg>
              <div class="link-row-url" style="font-size:0.75rem;">store-flyer</div>
              <div class="text-faint" style="font-size:0.75rem;">537 scans</div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="text-center p-3 border rounded" style="border-color:var(--line);">
              <svg viewBox="0 0 120 120" width="100" height="100" class="mx-auto mb-2">
                <rect width="120" height="120" fill="var(--paper-dim)"/>
                <rect x="16" y="16" width="28" height="28" fill="var(--ink)"/>
                <rect x="76" y="16" width="28" height="28" fill="var(--ink)"/>
                <rect x="16" y="76" width="28" height="28" fill="var(--ink)"/>
                <rect x="24" y="24" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="84" y="24" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="24" y="84" width="6" height="6" fill="var(--paper-dim)"/>
                <rect x="36" y="36" width="10" height="10" fill="var(--rope)"/>
                <rect x="82" y="36" width="10" height="10" fill="var(--ink)"/>
                <rect x="36" y="82" width="10" height="10" fill="var(--ink)"/>
                <rect x="50" y="50" width="8" height="8" fill="var(--ink)"/>
              </svg>
              <div class="link-row-url" style="font-size:0.75rem;">fall-preview</div>
              <div class="text-faint" style="font-size:0.75rem;">812 scans</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
</div>

<!-- Create QR modal -->
<div class="modal fade" id="createQrModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius:var(--radius-md);">
      <div class="modal-header">
        <h5 class="modal-title">Generate QR code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Short link</label>
          <select class="form-select">
            <option>knot.to/spring-ig-bio</option>
            <option>knot.to/spring-launch</option>
            <option>knot.to/spring-email</option>
            <option>knot.to/store-flyer</option>
            <option>knot.to/fall-preview</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Size</label>
          <select class="form-select">
            <option>200 x 200 px</option>
            <option>300 x 300 px</option>
            <option>500 x 500 px</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Foreground color</label>
          <div class="d-flex gap-2">
            <div class="rounded-circle" style="width:32px;height:32px;background:var(--ink);border:2px solid var(--rope);"></div>
            <div class="rounded-circle" style="width:32px;height:32px;background:var(--rope);border:2px solid var(--rope);"></div>
            <div class="rounded-circle" style="width:32px;height:32px;background:var(--moss);border:2px solid var(--rope);"></div>
            <div class="rounded-circle" style="width:32px;height:32px;background:var(--line-dark);border:2px solid var(--rope);"></div>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="qrLogo">
            <label class="form-check-label" for="qrLogo">Add logo overlay</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-ink" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-rope">Generate</button>
      </div>
    </div>
  </div>
</div>
@endsection
{{-- Page-specific JavaScript --}}
@push('scripts')
@endpush