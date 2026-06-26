<section>

    <h4 class="mb-3">Profile Information</h4>

    <p class="text-muted mb-4">
        Update your account's profile information and email address.
    </p>

    <!-- Email Verification Form -->
    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    @if(session('status') === 'profile-updated')
        <div class="alert alert-success">
            Profile updated successfully.
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">
                Name
            </label>

            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name">

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">
                Email
            </label>

            <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username">

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Email Verification Notice -->
        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

            <div class="alert alert-warning">

                <strong>Your email address is not verified.</strong>

                <div class="mt-2">
                    <button
                        type="submit"
                        form="send-verification"
                        class="btn btn-sm btn-outline-primary">
                        Resend Verification Email
                    </button>
                </div>

                @if (session('status') === 'verification-link-sent')
                    <div class="mt-3 text-success">
                        A new verification link has been sent to your email address.
                    </div>
                @endif

            </div>

        @endif

        <button type="submit" class="btn btn-primary">
            Save Changes
        </button>

    </form>

</section>