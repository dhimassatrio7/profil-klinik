@php
    $clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
@endphp

<x-layouts.frontend :title="$layanan->nama_layanan . ' - ' . $clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main class="py-16">
        <x-frontend.container>
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div>
                    <a href="{{ route('home') }}#layanan" class="text-sm font-semibold text-blue-700 hover:text-blue-800">
                        &larr; Kembali ke Beranda
                    </a>
                    
                    <div class="mt-8 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-50 shadow-sm">
                        @if ($layanan->icon)
                            <img src="{{ asset('storage/' . $layanan->icon) }}" alt="{{ $layanan->nama_layanan }}" class="h-10 w-10 object-contain">
                        @else
                            <span class="text-3xl font-bold text-blue-700">+</span>
                        @endif
                    </div>

                    <h1 class="mt-6 text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl">
                        {{ $layanan->nama_layanan }}
                    </h1>
                    
                    <div class="mt-8 text-lg leading-8 text-slate-700">
                        {!! nl2br($layanan->deskripsi) !!}
                    </div>

                    <div class="mt-10">
                        <a href="{{ $pengaturan?->whatsapp ? 'https://wa.me/' . $pengaturan->whatsapp : '#kontak' }}" class="inline-flex h-12 items-center justify-center rounded-lg bg-blue-700 px-8 text-sm font-bold text-white shadow-lg shadow-blue-900/10 transition hover:bg-blue-800">
                            Konsultasi Layanan Ini
                        </a>
                    </div>
                </div>

                <div class="relative">
                    @if ($layanan->gambar)
                        <div class="overflow-hidden rounded-2xl shadow-2xl">
                            <img src="{{ asset('storage/' . $layanan->gambar) }}" alt="{{ $layanan->nama_layanan }}" class="w-full object-cover">
                        </div>
                    @else
                        <div class="aspect-square rounded-2xl bg-gradient-to-br from-blue-50 via-white to-sky-50 shadow-inner"></div>
                    @endif
                </div>
            </div>
        </x-frontend.container>
    </main>

    <footer class="mt-16 border-t border-slate-200 bg-slate-950 py-10 text-white">
        <x-frontend.container>
            <p class="text-center text-sm text-slate-400">
                &copy; {{ date('Y') }} {{ $clinicName }}. Seluruh hak cipta dilindungi.
            </p>
        </x-frontend.container>
    </footer>
</x-layouts.frontend>
