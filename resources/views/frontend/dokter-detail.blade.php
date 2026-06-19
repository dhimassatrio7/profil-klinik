@php
    $clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
@endphp

<x-layouts.frontend :title="'Profil ' . $dokter->nama . ' - ' . $clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main class="py-16">
        <x-frontend.container>
            <div class="mx-auto max-w-5xl">
                <a href="{{ route('home') }}#dokter" class="text-sm font-semibold text-blue-700 hover:text-blue-800">
                    &larr; Kembali ke Beranda
                </a>

                <div class="mt-8 grid gap-10 lg:grid-cols-[0.8fr_1.2fr]">
                    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-sm">
                        <div class="aspect-[3/4] overflow-hidden rounded-xl bg-slate-100">
                            @if ($dokter->foto)
                                <img src="{{ asset('storage/' . $dokter->foto) }}" alt="{{ $dokter->nama }}" class="h-full w-full object-cover">
                            @else
                                <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-blue-50 via-white to-sky-100">
                                    <span class="text-4xl font-bold text-blue-700">
                                        {{ collect(explode(' ', $dokter->nama))->map(fn ($word) => mb_substr($word, 0, 1))->take(2)->implode('') }}
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div>
                        <p class="text-lg font-semibold text-blue-700">{{ $dokter->spesialis }}</p>
                        <h1 class="mt-2 text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl">
                            {{ $dokter->nama }}
                        </h1>

                        <div class="mt-8 grid gap-6 sm:grid-cols-2">
                            <div class="rounded-xl border border-blue-100 bg-blue-50/50 p-5">
                                <p class="text-sm font-bold text-blue-900 uppercase tracking-wider">Jadwal Praktik</p>
                                <p class="mt-2 text-slate-700 font-medium">{{ $dokter->jadwal ?? 'Silakan hubungi klinik untuk jadwal terbaru.' }}</p>
                            </div>
                            <div class="rounded-xl border border-slate-100 bg-slate-50 p-5">
                                <p class="text-sm font-bold text-slate-900 uppercase tracking-wider">Kontak Langsung</p>
                                <p class="mt-2 text-slate-700">{{ $dokter->no_telp ?? 'Melalui Resepsionis' }}</p>
                                <p class="text-sm text-slate-500">{{ $dokter->email }}</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h2 class="text-xl font-bold text-slate-950 underline decoration-blue-500 underline-offset-8">Biografi & Pengalaman</h2>
                            <div class="mt-6 text-lg leading-8 text-slate-700">
                                {{ $dokter->bio ?? 'Tenaga medis profesional yang berdedikasi tinggi dalam melayani pasien di Klinik Medika Keluarga.' }}
                            </div>
                        </div>

                        <div class="mt-10 pt-10 border-t border-slate-100">
                            <a href="{{ $pengaturan?->whatsapp ? 'https://wa.me/' . $pengaturan->whatsapp . '?text=Halo, saya ingin buat janji dengan ' . urlencode($dokter->nama) : '#kontak' }}" class="inline-flex h-12 items-center justify-center rounded-lg bg-blue-700 px-8 text-sm font-bold text-white shadow-lg shadow-blue-900/10 transition hover:bg-blue-800">
                                Buat Janji dengan Dokter
                            </a>
                        </div>
                    </div>
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
