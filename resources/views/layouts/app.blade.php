<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard Apotek')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak]{display:none!important}</style>
</head>

<body class="h-full font-sans text-slate-800 antialiased">
    <div class="min-h-full">

        {{-- NAVBAR PUNYA LU --}}
        @include('layouts.navbar')

        {{-- HEADER --}}
        <header class="bg-white/80 backdrop-blur border-b border-slate-200">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">
                    @yield('page_title', 'Dashboard')
                </h1>
                <p class="mt-1 text-sm sm:text-base text-slate-500">
                    @yield('page_subtitle', '')
                </p>
            </div>
        </header>

        {{-- MAIN --}}
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
            <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-4 sm:p-6">
                @yield('content')
            </div>
        </main>

        {{-- FOOTER PUNYA LU --}}
        @include('layouts.footer')

    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>