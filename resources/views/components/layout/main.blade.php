<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} - Apotek</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak]{display:none!important}</style>
</head>

<body class="h-full font-sans text-slate-800 antialiased">
    <div class="min-h-full">

        {{-- Navbar component --}}
        <x-layout.navbar />

        {{-- Header --}}
        <header class="bg-white/80 backdrop-blur border-b border-slate-200">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">
                    {{ $title }}
                </h1>

                @if($subtitle)
                    <p class="mt-1 text-sm sm:text-base text-slate-500">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>
        </header>

        {{-- Main content --}}
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
            <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-4 sm:p-6">
                {{ $slot }}
            </div>
        </main>

        {{-- Footer component --}}
        <x-layout.footer />

    </div>
</body>
</html>