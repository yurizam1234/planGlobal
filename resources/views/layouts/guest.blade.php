<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="hold-transition login-page">
        <div class="login-box" style="max-width: 600px; width: 480px;">
            <div class="login-logo">
                <a href="{{ url('/') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
