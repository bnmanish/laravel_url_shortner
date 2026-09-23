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
                <h2 class="h3 mb-1">Team workspace</h2>
                <p class="text-soft mb-0">Manage your team members, roles, and permissions.</p>
            </div>
        </div>

        <!-- Workspace info -->
        <div class="stat-tile mb-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle" style="width:48px;height:48px;background:var(--rope);flex-shrink:0;"></div>
                    <div>
                        <h5 class="mb-0">Fernway workspace</h5>
                        <p class="text-faint mb-0" style="font-size:0.85rem;">3 members &middot; Plan: Growth</p>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-sm btn-outline-ink">Edit workspace</button>
                    <button class="btn btn-sm btn-rope">Upgrade plan</button>
                </div>
            </div>
        </div>

        <!-- Team members -->
        <div class="stat-tile p-0 mb-4">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom"
                style="border-color:var(--line)!important;">
                <h6 class="mb-0">Members</h6>
                <span class="text-faint" style="font-size:0.85rem;">3 of 10 seats used</span>
            </div>
            <div class="table-responsive">
                <table class="table table-links mb-0">
                    <thead>
                        <tr class="text-faint" style="font-size:0.8rem;">
                            <th class="ps-3">Member</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Links created</th>
                            <th class="pe-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle"
                                        style="width:32px;height:32px;background:var(--rope);flex-shrink:0;"></div>
                                    <div>
                                        <div class="fw-semibold" style="font-size:0.88rem;">Priya Menon</div>
                                        <div class="text-faint" style="font-size:0.75rem;">Owner</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge-tag"
                                    style="background:var(--rope); color:white; width:fit-content;">admin</span></td>
                            <td class="text-soft">priya@fernway.com</td>
                            <td class="fw-semibold">42</td>
                            <td class="pe-3 text-end"><span class="text-faint" style="font-size:0.85rem;">You</span></td>
                        </tr>
                        <tr>
                            <td class="ps-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle"
                                        style="width:32px;height:32px;background:var(--moss);flex-shrink:0;"></div>
                                    <div>
                                        <div class="fw-semibold" style="font-size:0.88rem;">Sam Whitaker</div>
                                        <div class="text-faint" style="font-size:0.75rem;">Editor</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge-tag"
                                    style="background:var(--moss-tint); color:var(--moss); width:fit-content;">editor</span>
                            </td>
                            <td class="text-soft">sam@fernway.com</td>
                            <td class="fw-semibold">28</td>
                            <td class="pe-3 text-end">
                                <button class="btn btn-sm btn-outline-ink">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle"
                                        style="width:32px;height:32px;background:var(--line-dark);flex-shrink:0;"></div>
                                    <div>
                                        <div class="fw-semibold" style="font-size:0.88rem;">Alex Duarte</div>
                                        <div class="text-faint" style="font-size:0.75rem;">Viewer</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge-tag"
                                    style="background:var(--paper-dim); color:var(--ink-faint); width:fit-content;">viewer</span>
                            </td>
                            <td class="text-soft">alex@fernway.com</td>
                            <td class="fw-semibold">5</td>
                            <td class="pe-3 text-end">
                                <button class="btn btn-sm btn-outline-ink">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Activity log -->
        <div class="row gy-3 mb-4">
            <div class="col-lg-8">
                <div class="stat-tile">
                    <h6 class="mb-3">Activity log</h6>
                    <div class="d-grid gap-3">
                        <div class="d-flex gap-3 align-items-start py-2 border-bottom"
                            style="border-color:var(--line)!important;">
                            <div class="rounded-circle"
                                style="width:28px;height:28px;background:var(--rope-tint);flex-shrink:0;"></div>
                            <div>
                                <div class="fw-semibold" style="font-size:0.85rem;">Priya created a new link</div>
                                <div class="text-faint" style="font-size:0.78rem;">knot.to/fall-preview &middot; 2 hours ago
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 align-items-start py-2 border-bottom"
                            style="border-color:var(--line)!important;">
                            <div class="rounded-circle"
                                style="width:28px;height:28px;background:var(--moss-tint);flex-shrink:0;"></div>
                            <div>
                                <div class="fw-semibold" style="font-size:0.85rem;">Sam edited the spring campaign</div>
                                <div class="text-faint" style="font-size:0.78rem;">knot.to/spring-launch &middot; 5 hours
                                    ago</div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 align-items-start py-2 border-bottom"
                            style="border-color:var(--line)!important;">
                            <div class="rounded-circle"
                                style="width:28px;height:28px;background:var(--paper-dim);flex-shrink:0;"></div>
                            <div>
                                <div class="fw-semibold" style="font-size:0.85rem;">Alex viewed analytics</div>
                                <div class="text-faint" style="font-size:0.78rem;">Dashboard &middot; 1 day ago</div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 align-items-start py-2 border-bottom"
                            style="border-color:var(--line)!important;">
                            <div class="rounded-circle"
                                style="width:28px;height:28px;background:var(--rope-tint);flex-shrink:0;"></div>
                            <div>
                                <div class="fw-semibold" style="font-size:0.85rem;">Priya generated a QR code</div>
                                <div class="text-faint" style="font-size:0.78rem;">knot.to/store-flyer &middot; 2 days ago
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 align-items-start py-2">
                            <div class="rounded-circle"
                                style="width:28px;height:28px;background:var(--moss-tint);flex-shrink:0;"></div>
                            <div>
                                <div class="fw-semibold" style="font-size:0.85rem;">Sam invited Alex to the team</div>
                                <div class="text-faint" style="font-size:0.78rem;">Team &middot; 3 days ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Roles & permissions -->
            <div class="col-lg-4">
                <div class="stat-tile h-100">
                    <h6 class="mb-3">Roles & permissions</h6>
                    <div class="d-grid gap-3">
                        <div class="p-3 border rounded" style="border-color:var(--line);">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-semibold" style="font-size:0.88rem;">Admin</span>
                                <span class="badge-tag" style="background:var(--rope); color:white;">2</span>
                            </div>
                            <p class="text-faint mb-0" style="font-size:0.82rem;">Full access: create, edit, delete,
                                invite, and manage billing.</p>
                        </div>
                        <div class="p-3 border rounded" style="border-color:var(--line);">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-semibold" style="font-size:0.88rem;">Editor</span>
                                <span class="badge-tag" style="background:var(--moss-tint); color:var(--moss);">1</span>
                            </div>
                            <p class="text-faint mb-0" style="font-size:0.82rem;">Create and edit links, view analytics,
                                but no billing access.</p>
                        </div>
                        <div class="p-3 border rounded" style="border-color:var(--line);">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-semibold" style="font-size:0.88rem;">Viewer</span>
                                <span class="badge-tag"
                                    style="background:var(--paper-dim); color:var(--ink-faint);">1</span>
                            </div>
                            <p class="text-faint mb-0" style="font-size:0.82rem;">View links and analytics only. No edit
                                or invite permissions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invite section -->
        <div class="stat-tile">
            <h6 class="mb-3">Invite team members</h6>
            <form onsubmit="return false;">
                <div class="row gy-3 align-items-end">
                    <div class="col-md-5">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="colleague@company.com">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Role</label>
                        <select class="form-select">
                            <option>Admin</option>
                            <option>Editor</option>
                            <option>Viewer</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-rope w-100">Send invite</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </main>
    </div>

    <!-- Invite modal -->
    <div class="modal fade" id="inviteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:var(--radius-md);">
                <div class="modal-header">
                    <h5 class="modal-title">Invite team member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="colleague@company.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select class="form-select">
                            <option>Admin</option>
                            <option>Editor</option>
                            <option>Viewer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendWelcome">
                            <label class="form-check-label" for="sendWelcome">Send welcome email</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-ink" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-rope">Send invite</button>
                </div>
            </div>
        </div>
    </div>
@endsection
