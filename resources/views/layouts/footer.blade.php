<footer class="mt-10 border-t border-slate-200 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

            {{-- Left --}}
            <div class="flex items-center gap-3">
                <div class="h-9 w-9 rounded-xl bg-emerald-600/10 grid place-content-center border border-emerald-600/20">
                    <span class="text-emerald-600 font-bold text-lg leading-none">+</span>
                </div>
                <div>
                    <p class="text-sm font-semibold text-slate-800">
                        Sistem Apotek
                    </p>
                    <p class="text-xs text-slate-500">
                        Dashboard & Manajemen
                    </p>
                </div>
            </div>

            {{-- Right --}}
            <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 text-xs text-slate-500">
                <span>
                    © {{ date('Y') }} Apotek
                </span>

                <span class="hidden sm:inline-block h-3 w-px bg-slate-300"></span>

                <span>
                    Dibuat dengan ❤️ oleh Tim
                </span>
            </div>

        </div>
    </div>
</footer>