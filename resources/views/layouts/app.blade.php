<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

{{-- bg-gray-100 h-screen antialiased leading-none --}}
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">

        <div
            class="h-screen flex overflow-hidden bg-gray-100"
            x-data="{ sidebarOpen: false }"
            @keydown.window.escape="sidebarOpen = false">

            @include('layouts.partials.sidebar')

            <div class="flex flex-col w-0 flex-1 overflow-hidden">
                @include('layouts.partials.top-nav')
                <main
                    tabindex="0"
                    x-data
                    x-init="$el.focus()"
                    class="flex-1 relative z-0 overflow-y-auto py-6 focus:outline-none bg-gray-200">

                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

                        @if(session('success'))
                            <x-notification :message="session('success')"></x-notification>
                        @endif

                        @yield('content')

                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
