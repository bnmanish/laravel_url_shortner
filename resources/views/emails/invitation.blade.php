<h2>Welcome {{ $user->name }}</h2>

<p>You have been invited to join the system.</p>

<p>
    <strong>Company:</strong> {{ $company->name }}
</p>

<p>
    <strong>Email:</strong> {{ $user->email }}
</p>

<p>
    <strong>Password:</strong> {{ $password }}
</p>

<p>
    Login URL:
    <a href="{{ url('/login') }}">
        {{ url('/login') }}
    </a>
</p>

<p>Please change your password after your first login.</p>

<p>Regards,<br>Admin Team</p>