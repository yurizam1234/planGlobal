<x-guest-layout>
    <p class="login-box-msg">{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Resend Verification Email') }}</button>
            </div>
        </div>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0">{{ __('Log Out') }}</button>
    </form>
</x-guest-layout>
