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
                <h2 class="h3 mb-1">Profile</h2>
                <p class="text-soft mb-0">Manage your account</p>
            </div>
        </div>

        <!-- Account settings -->
        <div class="stat-tile mb-4">
            <h6 class="mb-3 pb-2" style="border-bottom:1px solid var(--line);">Account</h6>
            <form id="profile-form" style="post" action="{{route('profile.update')}}">
                @csrf
                <div class="row gy-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$userData->name}}">
                        <div class="text-danger error-name"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$userData->email}}">
                        <div class="text-danger error-email"></div>
                    </div>
                    <div class="col-12 information-txt mt-3">Only enter a password if you wish to update it.</div>
                    <div class="col-6 mt-0">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="*******" autocomplete="new-password">
                        <div class="text-danger error-password"></div>
                    </div>
                    <div class="col-6  mt-0">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="*******" autocomplete="new-password">
                        <div class="text-danger error-password_confirmation"></div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-rope">Save changes</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </main>
    </div>
@endsection
{{-- Page-specific JavaScript --}}
@push('scripts')
<script>
$(document).ready(function () {
    $('#profile-form').on('submit', function (e) {
        e.preventDefault();

        const form = this;
        const $btn = $(form).find('button[type="submit"]');
        const formData = new FormData(form);

        // Clear previous errors
        $(form).find('.text-danger').text('');
        $(form).find('.form-control').removeClass('is-invalid');

        $.ajax({
            url: $(form).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },

            beforeSend: function () {
                $btn.prop('disabled', true).text('Saving...');
            },

            success: function (response) {
                if (response.success) {
                    alert(response.message);
                    // Clear password fields after a successful save
                    $(form).find('input[type="password"]').val('');
                }
            },

            error: function (xhr) {
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors || {};

                    $.each(errors, function (field, messages) {
                        $(form).find('.error-' + field).text(messages[0]);
                        $(form).find('[name="' + field + '"]').addClass('is-invalid');
                    });
                } else if (xhr.status === 419) {
                    alert('Session expired. Please refresh the page and try again.');
                } else {
                    alert(xhr.responseJSON?.message || 'Something went wrong.');
                }
            },

            complete: function () {
                $btn.prop('disabled', false).text('Save changes');
            }
        });
    });
});
</script>
@endpush