<section>
    <header>
        <h2 class="h4 mb-2">{{ __('Profile Information') }}</h2>
        <p class="text-muted mb-4">{{ __("Update your account's profile information and email address.") }}</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="alert alert-warning mt-3">
                    {{ __('Your email address is unverified.') }}
                    <button form="send-verification" class="btn btn-link p-0 ms-1">{{ __('Click here to re-send the verification email.') }}</button>
                </div>

                @if (session('status') === 'verification-link-sent')
                    <div class="alert alert-success mt-2">{{ __('A new verification link has been sent to your email address.') }}</div>
                @endif
            @endif
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

        @if (session('status') === 'profile-updated')
            <span class="text-success ms-3">{{ __('Saved.') }}</span>
        @endif
    </form>
</section>
