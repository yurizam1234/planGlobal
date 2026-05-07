<x-guest-layout>
    <p class="login-box-msg">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="input-group mb-3">
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus placeholder="{{ __('Email') }}">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        @error('email')<div class="text-danger small mb-3">{{ $message }}</div>@enderror

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">{{ __('Email Password Reset Link') }}</button>
            </div>
        </div>
    </form>

    <p class="mt-3 mb-0">
        <a href="{{ route('login') }}" class="text-center">{{ __('Login') }}</a>
    </p>
</x-guest-layout>
