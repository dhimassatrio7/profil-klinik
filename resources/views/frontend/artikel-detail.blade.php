@php
    $clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
@endphp

<x-layouts.frontend :title="$artikel->judul . ' - ' . $clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main class="py-16">
        <x-frontend.container>
            <div class="mx-auto max-w-3xl">
                <a href="{{ route('home') }}#artikel" class="text-sm font-semibold text-blue-700 hover:text-blue-800">
                    &larr; Kembali ke Beranda
                </a>

                <article class="mt-8">
                    <header>
                        <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">
                            {{ optional($artikel->tanggal_publish)->translatedFormat('d F Y') }}
                        </p>
                        <h1 class="mt-4 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                            {{ $artikel->judul }}
                        </h1>
                        <div class="mt-4 flex items-center gap-2 text-sm text-slate-600">
                            <span>Oleh: {{ $artikel->user?->name ?? 'Admin' }}</span>
                        </div>
                    </header>

                    @if ($artikel->gambar)
                        <div class="mt-8 overflow-hidden rounded-xl border border-slate-200">
                            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="aspect-video w-full object-cover">
                        </div>
                    @endif

                    <div class="prose prose-slate mt-10 max-w-none text-lg leading-8 text-slate-700">
                        {!! nl2br($artikel->isi) !!}
                    </div>
                </article>
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
