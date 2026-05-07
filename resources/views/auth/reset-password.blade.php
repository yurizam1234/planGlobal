<x-guest-layout>
    <p class="login-box-msg">{{ __('Reset your password') }}</p>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="input-group mb-3">
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" class="form-control" required autofocus autocomplete="username" placeholder="{{ __('Email') }}">
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
                <button type="submit" class="btn btn-primary w-100">{{ __('Reset Password') }}</button>
            </div>
        </div>
    </form>
</x-guest-layout>
