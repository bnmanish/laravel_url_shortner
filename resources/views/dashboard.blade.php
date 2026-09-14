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
                <div class="stat-num" style="font-size:1.9rem;">142<span class="text-faint"
                        style="font-size:1rem;">/5,000</span></div>
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
                    <div class="d-flex justify-content-between"><span class="text-soft">Instagram bio</span><span
                            class="fw-semibold">6,714</span></div>
                    <div class="d-flex justify-content-between"><span class="text-soft">Email campaign</span><span
                            class="fw-semibold">4,208</span></div>
                    <div class="d-flex justify-content-between"><span class="text-soft">Direct / QR</span><span
                            class="fw-semibold">1,933</span></div>
                    <div class="d-flex justify-content-between"><span class="text-soft">Twitter / X</span><span
                            class="fw-semibold">812</span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Links table -->
    <div class="stat-tile p-0">
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom"
            style="border-color:var(--line)!important;">
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
                        <td class="text-soft text-truncate" style="max-width:220px;">northwind.com/products/spring...
                        </td>
                        <td class="text-soft">Sep 2</td>
                        <td class="text-end fw-semibold">4,208</td>
                        <td class="pe-3 text-end">
                            <button class="btn btn-sm btn-outline-ink"
                                data-copy-text="https://knot.to/spring-launch">Copy</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-3">
                            <div class="link-row-url">knot.to/spring-email</div>
                            <span class="badge-tag">Newsletter</span>
                        </td>
                        <td class="text-soft text-truncate" style="max-width:220px;">northwind.com/email/spring...
                        </td>
                        <td class="text-soft">Sep 3</td>
                        <td class="text-end fw-semibold">1,933</td>
                        <td class="pe-3 text-end">
                            <button class="btn btn-sm btn-outline-ink"
                                data-copy-text="https://knot.to/spring-email">Copy</button>
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
                            <button class="btn btn-sm btn-outline-ink"
                                data-copy-text="https://knot.to/spring-ig-bio">Copy</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-3">
                            <div class="link-row-url">knot.to/fall-preview</div>
                            <span class="badge-tag">Newsletter</span>
                        </td>
                        <td class="text-soft text-truncate" style="max-width:220px;">northwind.com/products/fall...
                        </td>
                        <td class="text-soft">Sep 9</td>
                        <td class="text-end fw-semibold">812</td>
                        <td class="pe-3 text-end">
                            <button class="btn btn-sm btn-outline-ink"
                                data-copy-text="https://knot.to/fall-preview">Copy</button>
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
                            <button class="btn btn-sm btn-outline-ink"
                                data-copy-text="https://knot.to/store-flyer">Copy</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between align-items-center p-3 border-top text-faint"
            style="border-color:var(--line)!important; font-size:0.85rem;">
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
@endsection
{{-- Page-specific JavaScript --}}
@push('scripts')
@endpush