@php
$clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
$description = $pengaturan?->deskripsi_singkat
?? 'Layanan kesehatan keluarga yang nyaman, terjangkau, dan ditangani oleh tenaga medis profesional.';
@endphp

<x-layouts.frontend :title="$clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main>
        <section class="relative overflow-hidden bg-white">
            <div class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-blue-50 to-white"></div>

            <x-frontend.container class="relative grid min-h-[calc(100vh-4rem)] items-center gap-10 py-14 lg:grid-cols-[1.05fr_0.95fr] lg:py-16">
                <div class="max-w-3xl">
                    <p class="inline-flex rounded-full border border-blue-200 bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-800">
                        Klinik keluarga untuk perawatan harian
                    </p>

                    <h1 class="mt-6 text-4xl font-bold tracking-normal text-slate-950 sm:text-5xl lg:text-6xl">
                        {{ $clinicName }}
                    </h1>

                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                        {{ $description }}
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="{{ $pengaturan?->whatsapp ? 'https://wa.me/' . $pengaturan->whatsapp : '#kontak' }}" class="inline-flex h-12 items-center justify-center rounded-lg bg-blue-700 px-6 text-sm font-bold text-white shadow-lg shadow-blue-900/10 transition hover:bg-blue-800">
                            Konsultasi Sekarang
                        </a>
                        <a href="#layanan" class="inline-flex h-12 items-center justify-center rounded-lg border border-slate-300 bg-white px-6 text-sm font-bold text-slate-800 transition hover:border-blue-600 hover:text-blue-700">
                            Lihat Layanan
                        </a>
                    </div>

                    <div class="mt-10 grid gap-4 sm:grid-cols-3">
                        <div class="rounded-lg border border-slate-200 bg-white p-4">
                            <p class="text-2xl font-bold text-slate-950">{{ $layanans->count() }}+</p>
                            <p class="mt-1 text-sm text-slate-600">Layanan aktif</p>
                        </div>
                        <div class="rounded-lg border border-slate-200 bg-white p-4">
                            <p class="text-2xl font-bold text-slate-950">{{ $dokters->count() }}+</p>
                            <p class="mt-1 text-sm text-slate-600">Dokter tersedia</p>
                        </div>
                        <div class="rounded-lg border border-slate-200 bg-white p-4">
                            <p class="text-2xl font-bold text-slate-950">24/7</p>
                            <p class="mt-1 text-sm text-slate-600">Jam layanan</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="rounded-lg border border-slate-200 bg-slate-950 p-6 text-white shadow-2xl shadow-slate-900/20">
                        <div class="flex items-center justify-between border-b border-white/10 pb-5">
                            <div>
                                <p class="text-sm text-blue-200">Status Klinik</p>
                                <p class="mt-1 text-xl font-bold">Siap Melayani</p>
                            </div>
                            <span class="rounded-full bg-emerald-400/15 px-3 py-1 text-sm font-semibold text-emerald-200">Online</span>
                        </div>

                        <div class="mt-6 space-y-4">
                            <div class="rounded-lg bg-white/10 p-4">
                                <p class="text-sm text-slate-300">Jam Operasional</p>
                                <p class="mt-1 font-semibold">{{ $pengaturan?->jam_operasional ?? 'Senin - Sabtu, 08.00 - 20.00' }}</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-lg bg-white/10 p-4">
                                    <p class="text-sm text-slate-300">Antrian</p>
                                    <p class="mt-1 text-2xl font-bold">Ringan</p>
                                </div>
                                <div class="rounded-lg bg-white/10 p-4">
                                    <p class="text-sm text-slate-300">Kontak</p>
                                    <p class="mt-1 text-2xl font-bold">24/7</p>
                                </div>
                            </div>
                            <div class="rounded-lg bg-blue-500 p-5 text-slate-950">

                                <p class="text-sm font-semibold">Pendaftaran cepat</p>
                                <p class="mt-2 text-2xl font-bold">Buat janji sebelum datang untuk layanan lebih efisien.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </x-frontend.container>
        </section>

        <section id="layanan" class="bg-slate-50 py-20">
            <x-frontend.container>
                <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <x-frontend.section-heading eyebrow="Layanan" title="Layanan kesehatan yang mudah diakses" description="Pilih layanan klinik sesuai kebutuhan keluarga, dari konsultasi umum sampai pemeriksaan kesehatan berkala." />
                </div>

                <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @forelse ($layanans as $layanan)
                    <x-frontend.service-card :layanan="$layanan" />
                    @empty
                    <div class="rounded-lg border border-slate-200 bg-white p-6 text-slate-600">Belum ada layanan aktif.</div>
                    @endforelse
                </div>
            </x-frontend.container>
        </section>

        <section id="dokter" class="bg-white py-20">
            <x-frontend.container>
                <x-frontend.section-heading eyebrow="Dokter" title="Dokter yang siap membantu" description="Dokter profesional kami" />

                <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    @forelse ($dokters as $dokter)
                    <x-frontend.doctor-card :dokter="$dokter" />
                    @empty
                    <div class="rounded-lg border border-slate-200 bg-white p-6 text-slate-600">Belum ada dokter aktif.</div>
                    @endforelse
                </div>
            </x-frontend.container>
        </section>

        <section id="artikel" class="bg-slate-50 py-20">
            <x-frontend.container>
                <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <x-frontend.section-heading eyebrow="Artikel" title="Edukasi kesehatan terbaru" description="Informasi singkat dari klinik untuk membantu keluarga menjaga kesehatan sehari-hari." />
                    <a href="{{ route('artikel.index') }}" class="text-sm font-bold text-blue-700 hover:text-blue-800">Lihat Semua Artikel &rarr;</a>
                </div>

                <div class="mt-10 grid gap-5 md:grid-cols-3">
                    @forelse ($artikels as $artikel)
                    <x-frontend.article-card :artikel="$artikel" />
                    @empty
                    <div class="rounded-lg border border-slate-200 bg-white p-6 text-slate-600">Belum ada artikel publish.</div>
                    @endforelse
                </div>
            </x-frontend.container>
        </section>

        <section id="kontak" class="bg-white py-20">
            <x-frontend.container>
                <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
                    <div>
                        <x-frontend.section-heading eyebrow="Kontak" title="Kunjungi atau hubungi klinik" description="Hubungi tim kami untuk konfirmasi jadwal, pertanyaan layanan, atau bantuan pendaftaran." />

                        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-1">
                            <x-frontend.contact-item label="Alamat" :value="$pengaturan?->alamat" />
                            <x-frontend.contact-item label="Telepon" :value="$pengaturan?->telepon" />
                            <x-frontend.contact-item label="Email" :value="$pengaturan?->email" />
                            <x-frontend.contact-item label="Jam Operasional" :value="$pengaturan?->jam_operasional" />
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-lg border border-slate-200 bg-slate-100">
                        @if ($pengaturan?->maps_embed)
                        <div class="aspect-video [&_iframe]:h-full [&_iframe]:w-full">
                            {!! $pengaturan->maps_embed !!}
                        </div>
                        @else
                        <div class="flex aspect-video items-center justify-center p-8 text-center">
                            <div>
                                <p class="text-lg font-bold text-slate-950">{{ $clinicName }}</p>
                                <p class="mt-3 max-w-md text-sm leading-6 text-slate-600">{{ $pengaturan?->alamat ?? 'Alamat klinik dapat ditambahkan dari menu Pengaturan di admin.' }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </x-frontend.container>
        </section>
    </main>

    <footer class="border-t border-slate-200 bg-slate-950 py-10 text-white">
        <x-frontend.container class="flex flex-col justify-between gap-6 md:flex-row md:items-center">
            <div>
                <p class="text-lg font-bold">{{ $clinicName }}</p>
                <p class="mt-2 max-w-xl text-sm leading-6 text-slate-400">{{ $description }}</p>
            </div>

            <div class="flex gap-3 text-sm text-slate-300">
                @if ($pengaturan?->facebook)
                <a href="{{ $pengaturan->facebook }}" class="hover:text-white">Facebook</a>
                @endif
                @if ($pengaturan?->instagram)
                <a href="{{ $pengaturan->instagram }}" class="hover:text-white">Instagram</a>
                @endif
                @if ($pengaturan?->whatsapp)
                <a href="https://wa.me/{{ $pengaturan->whatsapp }}" class="hover:text-white">WhatsApp</a>
                @endif
            </div>
        </x-frontend.container>
    </footer>
</x-layouts.frontend>
