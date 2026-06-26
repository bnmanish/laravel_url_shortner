<section>

    <h4 class="mb-3">Update Password</h4>

    <p class="text-muted mb-4">
        Ensure your account is using a long, random password to stay secure.
    </p>

    @if(session('status') === 'password-updated')
        <div class="alert alert-success">
            Password updated successfully.
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')

        <!-- Current Password -->
        <div class="mb-3">
            <label for="current_password" class="form-label">
                Current Password
            </label>

            <input
                type="password"
                class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                id="current_password"
                name="current_password"
                autocomplete="current-password">

            @error('current_password', 'updatePassword')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- New Password -->
        <div class="mb-3">
            <label for="password" class="form-label">
                New Password
            </label>

            <input
                type="password"
                class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                id="password"
                name="password"
                autocomplete="new-password">

            @error('password', 'updatePassword')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="form-label">
                Confirm Password
            </label>

            <input
                type="password"
                class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                id="password_confirmation"
                name="password_confirmation"
                autocomplete="new-password">

            @error('password_confirmation', 'updatePassword')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Save Changes
        </button>

    </form>

</section>