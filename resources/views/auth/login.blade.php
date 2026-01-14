@extends('layouts.guest')

@section('title', 'Login - Sistem Apotek')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-emerald-50 to-slate-50 flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 sm:p-8">
            {{-- Brand --}}
            <div class="flex items-center gap-3 mb-6">
                <div class="h-11 w-11 rounded-2xl bg-emerald-600/10 grid place-content-center border border-emerald-600/20">
                    <span class="text-emerald-600 font-bold text-xl leading-none">+</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-slate-900">Sistem Apotek</h1>
                    <p class="text-sm text-slate-500">Masuk untuk melanjutkan</p>
                </div>
            </div>

            {{-- Status --}}
            @if (session('status'))
                <div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Errors --}}
            @if ($errors->any())
                <div class="mb-4 rounded-xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-slate-700">Email</label>
                    <input
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500"
                        placeholder="contoh: admin@apotek.com"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700">Password</label>
                    <input
                        name="password"
                        type="password"
                        required
                        class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500"
                        placeholder="••••••••"
                    />
                </div>

                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center gap-2 text-sm text-slate-600">
                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-slate-300 text-emerald-600 focus:ring-emerald-500"
                        />
                        Ingat saya
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-emerald-700 hover:text-emerald-800 font-medium">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <button
                    type="submit"
                    class="w-full rounded-xl bg-emerald-600 py-2.5 text-white font-semibold hover:bg-emerald-700 active:scale-[0.99] transition"
                >
                    Masuk
                </button>

                {{-- Kalau lu mau matiin register, hapus blok ini --}}
                @if (Route::has('register'))
                    <p class="text-sm text-slate-600 text-center">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-emerald-700 hover:text-emerald-800 font-semibold">
                            Daftar
                        </a>
                    </p>
                @endif
            </form>
        </div>

        <p class="mt-4 text-center text-xs text-slate-500">
            © {{ date('Y') }} Sistem Apotek
        </p>
    </div>
</div>
@endsection