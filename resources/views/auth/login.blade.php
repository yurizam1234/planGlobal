<x-guest-layout>

    <div class="login-box">

        <!-- LOGO -->
        <div class="login-logo mb-3 text-center">
            <h2 class="fw-bold text-primary">Plan Global</h2>
            <p class="text-muted small">Sistema de Reservas</p>
        </div>

        <!-- MENSAJE -->
        <p class="login-box-msg text-center mb-4">
            {{ __('Inicia sesión para continuar') }}
        </p>

        <!-- ALERTA -->
        @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
        @endif

        <!-- FORMULARIO -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- EMAIL -->
            <div class="input-group mb-3">
                <input id="email" type="email" name="email"
                    value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror"
                    required autofocus autocomplete="username"
                    placeholder="Correo electrónico">
                <span class="input-group-text">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            @error('email')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- PASSWORD -->
            <div class="input-group mb-3">
                <input id="password" type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    required autocomplete="current-password"
                    placeholder="Contraseña">
                <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            @error('password')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- OPCIONES -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
                    <label for="remember_me" class="form-check-label">
                        Recordarme
                    </label>
                </div>

                <button type="submit" class="btn btn-primary px-4">
                    <i class="fas fa-sign-in-alt me-1"></i> Ingresar
                </button>
            </div>

        </form>

        <!-- LINKS -->
    <div class="d-grid gap-2 mt-3">

        <!-- Botón Olvidé contraseña -->
        <a href="{{ route('password.request') }}" 
        class="btn btn-outline-danger btn-sm">
            🔑 ¿Olvidaste tu contraseña?
        </a>

        <!-- Botón Crear cuenta -->
        <a href="{{ route('register') }}" 
        class="btn btn-outline-primary btn-sm">
            ➕ Crear cuenta
        </a>

</div>

    </div>

</x-guest-layout>