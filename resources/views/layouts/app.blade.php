<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('layouts.navigation')

            <div class="content-wrapper">
                @if(isset($header) || View::hasSection('header'))
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>{{ $header ?? $__env->yieldContent('header') }}</h1>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif

                <section class="content">
                    <div class="container-fluid">
                        @isset($slot)
                            {{ $slot }}
                        @else
                            @yield('content')
                        @endisset
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="float-end d-none d-sm-inline">
                    {{ config('app.name', 'Laravel') }}
                </div>
                <strong>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}.</strong>
            </footer>
        </div>
    </body>
</html>
