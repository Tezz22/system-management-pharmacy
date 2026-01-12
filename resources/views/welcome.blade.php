<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <!-- ================= META ================= -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ================= TAILWIND ================= -->
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

    <title>Dashboard Apotek</title>
</head>

<body class="h-full font-sans text-gray-800">
    <div class="min-h-full">

        <!-- ================= NAVBAR ================= -->
        @include('layouts.navbar')

        <!-- ================= HEADER ================= -->
        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6">
                <h1 class="text-3xl font-bold text-gray-900">
                    Dashboard
                </h1>
                <p class="text-gray-500">
                    Selamat datang di sistem apotek
                </p>
            </div>
        </header>

        <!-- ================= MAIN CONTENT ================= -->
        <main class="mx-auto max-w-7xl px-4 py-6">

            <!-- CARD -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- CARD ITEM -->
                <div
                    class="bg-white rounded-xl border border-gray-200 p-6
                        hover:shadow-lg transition
                        active:scale-[0.98]">
                    <h3 class="font-semibold text-lg text-gray-700">
                        Total Obat
                    </h3>
                    <p class="mt-2 text-3xl font-bold text-green-600">
                        120
                    </p>
                </div>

                <div
                    class="bg-white rounded-xl border border-gray-200 p-6
                        hover:shadow-lg transition
                        active:scale-[0.98]">
                    <h3 class="font-semibold text-lg text-gray-700">
                        Penjualan Hari Ini
                    </h3>
                    <p class="mt-2 text-3xl font-bold text-green-600">
                        Rp 2.500.000
                    </p>
                </div>

                <div
                    class="bg-white rounded-xl border border-gray-200 p-6
                        hover:shadow-lg transition
                        active:scale-[0.98]">
                    <h3 class="font-semibold text-lg text-gray-700">
                        Stok Habis
                    </h3>
                    <p class="mt-2 text-3xl font-bold text-red-500">
                        3
                    </p>
                </div>

            </div>
        </main>

    </div>
</body>
</html>
