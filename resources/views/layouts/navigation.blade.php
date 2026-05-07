<nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm px-3">

    <!-- IZQUIERDA -->
    <ul class="navbar-nav align-items-center">

        <!-- BOTON MENU -->
        <li class="nav-item me-2">
            <a class="nav-link text-dark" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <!-- LOGO -->
        <li class="nav-item d-none d-sm-inline-block me-4">
            <a href="{{ route('dashboard') }}"
               class="nav-link fw-bold text-primary fs-5">
                Sistema WEB
            </a>
        </li>

        <!-- DASHBOARD -->
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}"
               class="nav-link fw-semibold text-dark">
                Dashboard
            </a>
        </li>

        <!-- USUARIOS -->
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('usuarios') }}"
               class="nav-link fw-semibold text-dark">
                Usuarios
            </a>
        </li>

        <!-- REPORTES -->
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#"
               class="nav-link fw-semibold text-dark">
                Reportes
            </a>
        </li>

    </ul>

    <!-- DERECHA -->
    <ul class="navbar-nav ms-auto align-items-center">

        <li class="nav-item dropdown">

            <a class="nav-link d-flex align-items-center"
               data-bs-toggle="dropdown"
               href="#"
               aria-expanded="false">

                <div class="bg-light rounded-circle d-flex justify-content-center align-items-center me-2"
                     style="width:35px; height:35px;">
                    <i class="fas fa-user text-secondary"></i>
                </div>

                <span class="fw-semibold text-dark">
                    {{ Auth::user()->name }}
                </span>

                <i class="fas fa-chevron-down ms-2 small text-secondary"></i>

            </a>

            <div class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3">

                <a href="{{ route('profile.edit') }}" class="dropdown-item py-2">
                    <i class="fas fa-user-cog me-2 text-primary"></i>
                    Perfil
                </a>

                <div class="dropdown-divider"></div>

                <a href="#"
                   class="dropdown-item py-2 text-danger"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">

                    <i class="fas fa-sign-out-alt me-2"></i>
                    Cerrar sesión
                </a>

            </div>

        </li>

    </ul>

</nav>

<form id="logout-form"
      action="{{ route('logout') }}"
      method="POST"
      class="d-none">
    @csrf
</form>