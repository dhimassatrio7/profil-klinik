@props(['pengaturan' => null])

<header x-data="{ open: false }" class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/95 backdrop-blur">
    <x-frontend.container class="flex h-16 items-center justify-between gap-4">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex min-w-0 items-center gap-3">
            @if ($pengaturan?->logo)
            <img src="{{ asset('storage/' . $pengaturan->logo) }}" alt="{{ $pengaturan->nama_klinik }}" class="h-10 w-10 ">
            @else
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-blue-700 text-sm font-bold text-white">KM</span>
            @endif
            <span class="truncate text-base font-bold text-slate-950">{{ $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga' }}</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden items-center gap-7 text-sm font-medium text-slate-600 md:flex">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-700' : 'hover:text-blue-700' }}">Beranda</a>
            <a href="{{ route('layanan.index') }}" class="{{ request()->routeIs('layanan.*') ? 'text-blue-700' : 'hover:text-blue-700' }}">Layanan</a>
            <a href="{{ route('dokter.index') }}" class="{{ request()->routeIs('dokter.*') ? 'text-blue-700' : 'hover:text-blue-700' }}">Dokter</a>
            <a href="{{ route('artikel.index') }}" class="{{ request()->routeIs('artikel.*') ? 'text-blue-700' : 'hover:text-blue-700' }}">Artikel</a>
            <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'text-blue-700' : 'hover:text-blue-700' }}">Kontak</a>
            <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'text-blue-700' : 'hover:text-blue-700' }}">Tentang Kami</a>
        </nav>

        <!-- CTA & Hamburger -->
        <div class="flex items-center gap-3">
            <a href="{{ $pengaturan?->whatsapp ? 'https://wa.me/' . $pengaturan->whatsapp : route('kontak') }}" class="hidden h-10 items-center justify-center rounded-lg bg-blue-700 px-4 text-sm font-semibold text-white shadow-sm shadow-blue-900/10 transition hover:bg-blue-800 sm:inline-flex">
                Hubungi Kami
            </a>

            <button @click="open = !open" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 md:hidden">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </x-frontend.container>

    <!-- Mobile Menu -->
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4" class="absolute inset-x-0 top-full border-b border-slate-200 bg-white p-4 shadow-xl md:hidden">
        <nav class="flex flex-col gap-1">
            <a href="{{ route('home') }}" class="flex h-11 items-center rounded-lg px-4 text-sm font-medium {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }}">Beranda</a>
            <a href="{{ route('layanan.index') }}" class="flex h-11 items-center rounded-lg px-4 text-sm font-medium {{ request()->routeIs('layanan.*') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }}">Layanan</a>
            <a href="{{ route('dokter.index') }}" class="flex h-11 items-center rounded-lg px-4 text-sm font-medium {{ request()->routeIs('dokter.*') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }}">Dokter</a>
            <a href="{{ route('artikel.index') }}" class="flex h-11 items-center rounded-lg px-4 text-sm font-medium {{ request()->routeIs('artikel.*') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }}">Artikel</a>
            <a href="{{ route('kontak') }}" class="flex h-11 items-center rounded-lg px-4 text-sm font-medium {{ request()->routeIs('kontak') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }}">Kontak</a>
            <a href="{{ route('tentang') }}" class="flex h-11 items-center rounded-lg px-4 text-sm font-medium {{ request()->routeIs('tentang') ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50' }}">Tentang Kami</a>

            <div class="mt-4 border-t border-slate-100 pt-4">
                <a href="{{ $pengaturan?->whatsapp ? 'https://wa.me/' . $pengaturan->whatsapp : route('kontak') }}" class="flex h-11 items-center justify-center rounded-lg bg-blue-700 text-sm font-bold text-white shadow-lg shadow-blue-900/10">
                    Buat Janji Sekarang
                </a>
            </div>
        </nav>
    </div>
</header>

<style>
    [x-cloak] {
        display: none !important;
    }

</style>
