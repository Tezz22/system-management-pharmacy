<x-layout.main
    title="Dashboard Kasir"
    subtitle="Ringkasan aktivitas apotek hari ini"
>

    {{-- GRID CARD --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">

        {{-- TOTAL OBAT --}}
        <div class="group rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-emerald-50 p-5 hover:shadow-lg transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-slate-500">Total Obat</p>
                    <p class="mt-1 text-3xl font-bold text-emerald-600">
                        120
                    </p>
                </div>
                <div class="h-12 w-12 rounded-xl bg-emerald-600/10 text-emerald-600 grid place-content-center text-xl font-bold">
                    💊
                </div>
            </div>
            <p class="mt-4 text-xs text-slate-500">
                Jumlah seluruh obat terdaftar
            </p>
        </div>

        {{-- PENJUALAN HARI INI --}}
        <div class="group rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-sky-50 p-5 hover:shadow-lg transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-slate-500">Penjualan Hari Ini</p>
                    <p class="mt-1 text-3xl font-bold text-sky-600">
                        Rp 2.500.000
                    </p>
                </div>
                <div class="h-12 w-12 rounded-xl bg-sky-600/10 text-sky-600 grid place-content-center text-xl">
                    💰
                </div>
            </div>
            <p class="mt-4 text-xs text-slate-500">
                Total transaksi hari ini
            </p>
        </div>

        {{-- STOK MENIPIS --}}
        <div class="group rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-amber-50 p-5 hover:shadow-lg transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-slate-500">Stok Menipis</p>
                    <p class="mt-1 text-3xl font-bold text-amber-500">
                        7
                    </p>
                </div>
                <div class="h-12 w-12 rounded-xl bg-amber-500/10 text-amber-500 grid place-content-center text-xl">
                    ⚠️
                </div>
            </div>
            <p class="mt-4 text-xs text-slate-500">
                Obat perlu segera direstok
            </p>
        </div>

        {{-- STOK HABIS --}}
        <div class="group rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-rose-50 p-5 hover:shadow-lg transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-slate-500">Stok Habis</p>
                    <p class="mt-1 text-3xl font-bold text-rose-600">
                        3
                    </p>
                </div>
                <div class="h-12 w-12 rounded-xl bg-rose-600/10 text-rose-600 grid place-content-center text-xl">
                    ❌
                </div>
            </div>
            <p class="mt-4 text-xs text-slate-500">
                Obat tidak tersedia
            </p>
        </div>

    </div>

    {{-- SECTION BAWAH --}}
    <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- AKTIVITAS --}}
        <div class="lg:col-span-2 rounded-2xl border border-slate-200 bg-white p-6">
            <h3 class="font-semibold text-slate-800 mb-4">
                Aktivitas Terakhir
            </h3>

            <ul class="space-y-3 text-sm">
                <li class="flex justify-between text-slate-600">
                    <span>Penjualan Paracetamol</span>
                    <span class="text-emerald-600 font-medium">Rp 50.000</span>
                </li>
                <li class="flex justify-between text-slate-600">
                    <span>Restok Vitamin C</span>
                    <span class="text-slate-400">+100 pcs</span>
                </li>
                <li class="flex justify-between text-slate-600">
                    <span>Penjualan Antibiotik</span>
                    <span class="text-emerald-600 font-medium">Rp 120.000</span>
                </li>
            </ul>
        </div>

        {{-- INFO --}}
        <div class="rounded-2xl border border-slate-200 bg-gradient-to-br from-emerald-600 to-emerald-700 p-6 text-white">
            <h3 class="font-semibold mb-2">
                Tips Apotek
            </h3>
            <p class="text-sm text-emerald-100">
                Selalu cek tanggal kadaluarsa dan stok minimum obat untuk menjaga pelayanan tetap optimal.
            </p>
        </div>

    </div>

</x-layout.main>
