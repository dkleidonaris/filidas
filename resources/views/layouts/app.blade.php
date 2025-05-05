<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    <meta
        name="robots"
        content="noindex,nofollow"
    >

    @hasSection('title')
        <title>@yield('title') | {{ __('Διαμερίσματα Filidas') }}</title>
    @else
        <title>{{ __('Διαμερίσματα Filidas') }}</title>
    @endif

    <link
        rel="icon"
        type="image/x-icon"
        href="{{ asset('img/favicon.ico') }}?v=2"
    >

    @hasSection('description')
        <meta
            name="description"
            content="@yield('description')"
        >
    @endif

    <!-- Fonts -->
    <link
        rel="preconnect"
        href="https://fonts.bunny.net"
    >
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    class="font-sans flex flex-col md:flex-row text-gray-900 antialiased overflow-y-auto"
>
    <x-nav.admin-menu />

    <div
        id="main-content"
        class="grow"
    >
        @hasSection('header')
            <h2 class="my-4 text-center text-3xl font-bold">@yield('header')
            </h2>
        @endif
        @yield('body')
    </div>

    @yield('scripts')
    @livewireScripts
    <script>
        function adjustMainContent() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            const sidebarWidth = sidebar.offsetWidth;
            mainContent.style.marginLeft = `${sidebarWidth}px`;
        }

        // Run on load
        window.addEventListener('load', adjustMainContent);

        // Run on resize
        window.addEventListener('resize', adjustMainContent);
    </script>

</body>

</html>
