<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <x-application-logo style="height:40px;width:auto;" />
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            @auth

                <!-- Left Side -->
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                           href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    @if(in_array(Auth::user()->role, ['Super Admin','Admin']))
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('invite.index') ? 'active' : '' }}"
                               href="{{ route('invite.index') }}">
                                Invite User
                            </a>
                        </li>
                    @endif

                    @if(in_array(Auth::user()->role, ['Admin','Member']))
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('create.link') ? 'active' : '' }}"
                               href="{{ route('create.link') }}">
                                Create Short URL
                            </a>
                        </li>
                    @endif

                </ul>

                <!-- Right Side -->
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle"
                           href="#"
                           id="navbarDropdown"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">

                            {{ Auth::user()->name }}
                            ({{ Auth::user()->role }})
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <a class="dropdown-item"
                                   href="{{ route('profile.edit') }}">
                                    Profile
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <form method="POST"
                                      action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit"
                                            class="dropdown-item">
                                        Logout
                                    </button>
                                </form>
                            </li>

                        </ul>

                    </li>

                </ul>

            @else

                <!-- Guest Menu -->
                <ul class="navbar-nav ms-auto">

                    @if(Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                    @endif

                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                    @endif

                </ul>

            @endauth

        </div>

    </div>
</nav>