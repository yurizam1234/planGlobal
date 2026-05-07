<x-guest-layout>
    <p class="login-box-msg">{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="input-group mb-3">
            <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password" placeholder="{{ __('Password') }}">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
        </div>
        @error('password')<div class="text-danger small mb-3">{{ $message }}</div>@enderror

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">{{ __('Confirm') }}</button>
            </div>
        </div>
    </form>
</x-guest-layout>
