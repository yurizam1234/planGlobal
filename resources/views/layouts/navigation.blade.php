<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">{{ __('Dashboard') }}</a>
        </li>
    </ul>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fas fa-user me-1"></i> {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                    <i class="fas fa-user-cog me-2"></i> {{ __('Profile') }}
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt me-2"></i> {{ __('Log Out') }}
                </a>
            </div>
        </li>
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
