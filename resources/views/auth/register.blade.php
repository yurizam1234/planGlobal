<x-guest-layout>
    <p class="login-box-msg">{{ __('Register a new membership') }}</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-group mb-3">
            <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" required autofocus autocomplete="name" placeholder="{{ __('Name') }}">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        @error('name')<div class="text-danger small mb-3">{{ $message }}</div>@enderror

        <div class="input-group mb-3">
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autocomplete="username" placeholder="{{ __('Email') }}">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
        @error('email')<div class="text-danger small mb-3">{{ $message }}</div>@enderror

        <div class="input-group mb-3">
            <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password" placeholder="{{ __('Password') }}">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
        </div>
        @error('password')<div class="text-danger small mb-3">{{ $message }}</div>@enderror

        <div class="input-group mb-3">
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
            <span class="input-group-text"><i class="fas fa-check"></i></span>
        </div>
        @error('password_confirmation')<div class="text-danger small mb-3">{{ $message }}</div>@enderror

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">{{ __('Register') }}</button>
            </div>
        </div>
    </form>

    <p class="mt-3 mb-0">
        <a href="{{ route('login') }}" class="text-center">{{ __('Already registered?') }}</a>
    </p>
</x-guest-layout>
