<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Repose Healing Center — Professional rehabilitation and mental wellness services in Entebbe, Uganda." />
    <title>@yield('title', 'Repose Healing Center')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-white text-slate-900">

    {{-- Emergency banner --}}
    @include('components.layout.emergency-banner')

    {{-- Header --}}
    @include('components.layout.header')

    {{-- Main content --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.layout.footer')

    {{-- Floating mobile call button --}}
    @include('components.layout.mobile-call-button')

</body>
</html>
