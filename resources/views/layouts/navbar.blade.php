<nav class="bg-emerald-700" x-data="{ open:false }" @click.outside="open=false">
    @php
        // ================= ACTIVE STATE =================
        $isDashboard = request()->routeIs('dashboard');

        // ⚠️ sementara dimatiin dulu
        // $isObat      = request()->routeIs('obat.*') || request()->routeIs('obat');
        // $isPenjualan = request()->routeIs('penjualan.*') || request()->routeIs('penjualan');

        $baseLink     = 'text-emerald-50/90 hover:text-white text-sm px-3 py-2 rounded-lg hover:bg-white/10 transition';
        $activeLink   = 'text-white text-sm px-3 py-2 rounded-lg bg-white/15 ring-1 ring-white/20';
        $disabledLink = 'text-emerald-200/60 text-sm px-3 py-2 rounded-lg cursor-not-allowed opacity-60';
    @endphp

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="h-16 flex items-center justify-between">

            {{-- Brand --}}
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                <div class="h-9 w-9 rounded-xl bg-white/15 grid place-content-center border border-white/20">
                    <span class="text-white font-bold text-lg leading-none">+</span>
                </div>
                <div class="text-white">
                    <p class="font-semibold leading-tight">Apotek</p>
                    <p class="text-xs text-emerald-100 -mt-0.5">Dashboard</p>
                </div>
            </a>

            {{-- Desktop menu --}}
            <div class="hidden md:flex items-center gap-2">

                {{-- ✅ ACTIVE --}}
                <a href="{{ route('dashboard') }}"
                   class="{{ $isDashboard ? $activeLink : $baseLink }}">
                    Dashboard
                </a>

                {{-- 🚧 DISABLED : OBAT --}}
                {{-- TODO: aktifkan setelah module obat siap --}}
                <span class="{{ $disabledLink }}">Obat</span>

                {{-- 🚧 DISABLED : PENJUALAN --}}
                {{-- TODO: aktifkan setelah module penjualan siap --}}
                <span class="{{ $disabledLink }}">Penjualan</span>

                <div class="ml-2 h-8 w-px bg-white/15"></div>

                {{-- User info (desktop) --}}
                <div class="hidden lg:flex items-center gap-2 pr-1 text-emerald-100 text-sm">
                    <span class="font-medium">{{ auth()->user()->name }}</span>
                    <span class="text-[11px] bg-white/15 px-2 py-0.5 rounded-md">
                        {{ strtoupper(auth()->user()->role) }}
                    </span>
                </div>

                {{-- LOGOUT (desktop) --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="text-emerald-50/90 hover:text-white text-sm px-3 py-2 rounded-lg hover:bg-white/10 transition">
                        Logout
                    </button>
                </form>
            </div>

            {{-- Mobile button --}}
            <button
                type="button"
                class="md:hidden inline-flex items-center justify-center rounded-lg p-2 text-white/90 hover:text-white hover:bg-white/10 transition"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-label="Toggle menu"
            >
                <svg x-show="!open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile dropdown --}}
    <div class="md:hidden border-t border-white/15" x-show="open" x-transition x-cloak>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-3 space-y-1">

            {{-- User info (mobile) --}}
            <div class="px-3 py-2 mb-2 rounded-lg bg-white/10 text-emerald-50">
                <p class="text-sm font-semibold">{{ auth()->user()->name }}</p>
                <p class="text-xs text-emerald-200">{{ strtoupper(auth()->user()->role) }}</p>
            </div>

            {{-- ✅ ACTIVE --}}
            <a href="{{ route('dashboard') }}"
               class="block {{ $isDashboard ? $activeLink : $baseLink }}">
                Dashboard
            </a>

            {{-- 🚧 DISABLED --}}
            {{-- TODO: aktifkan setelah module obat siap --}}
            <span class="block {{ $disabledLink }}">Obat</span>

            {{-- 🚧 DISABLED --}}
            {{-- TODO: aktifkan setelah module penjualan siap --}}
            <span class="block {{ $disabledLink }}">Penjualan</span>

            <div class="pt-2 border-t border-white/15"></div>

            {{-- LOGOUT (mobile) --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="block w-full text-left text-emerald-50/90 hover:text-white text-sm px-3 py-2 rounded-lg hover:bg-white/10 transition">
                    Logout
                </button>
            </form>

        </div>
    </div>
</nav>