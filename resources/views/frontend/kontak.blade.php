@php
    $clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
@endphp

<x-layouts.frontend :title="'Hubungi Kami - ' . $clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main class="py-16">
        <x-frontend.container>
            <x-frontend.section-heading
                eyebrow="Kontak"
                title="Hubungi atau kunjungi klinik kami"
                description="Tim kami siap membantu menjawab pertanyaan Anda seputar layanan, jadwal, atau bantuan pendaftaran."
            />

            <div class="mt-12 grid gap-12 lg:grid-cols-2">
                <!-- Info Kontak -->
                <div class="space-y-8">
                    <div class="grid gap-6 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:border-blue-300">
                            <p class="text-xs font-bold uppercase tracking-widest text-blue-700">Telepon</p>
                            <p class="mt-2 text-lg font-bold text-slate-950">{{ $pengaturan?->telepon }}</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:border-blue-300">
                            <p class="text-xs font-bold uppercase tracking-widest text-blue-700">WhatsApp</p>
                            <p class="mt-2 text-lg font-bold text-slate-950">{{ $pengaturan?->whatsapp }}</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:border-blue-300">
                            <p class="text-xs font-bold uppercase tracking-widest text-blue-700">Email</p>
                            <p class="mt-2 text-lg font-bold text-slate-950">{{ $pengaturan?->email }}</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:border-blue-300">
                            <p class="text-xs font-bold uppercase tracking-widest text-blue-700">Jam Operasional</p>
                            <p class="mt-2 text-lg font-bold text-slate-950">{{ $pengaturan?->jam_operasional }}</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                        <p class="text-xs font-bold uppercase tracking-widest text-blue-700">Alamat Lengkap</p>
                        <p class="mt-4 text-xl leading-8 text-slate-950">{{ $pengaturan?->alamat }}</p>
                        
                        <div class="mt-8 flex gap-4">
                            @if ($pengaturan?->facebook)
                                <a href="{{ $pengaturan->facebook }}" class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 text-slate-600 transition hover:bg-blue-600 hover:text-white">FB</a>
                            @endif
                            @if ($pengaturan?->instagram)
                                <a href="{{ $pengaturan->instagram }}" class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 text-slate-600 transition hover:bg-pink-600 hover:text-white">IG</a>
                            @endif
                        </div>
                    </div>

                    <a href="https://wa.me/{{ $pengaturan?->whatsapp }}" class="inline-flex h-14 w-full items-center justify-center rounded-2xl bg-blue-700 text-base font-bold text-white shadow-xl shadow-blue-900/20 transition hover:bg-blue-800">
                        Chat Via WhatsApp Sekarang
                    </a>
                </div>

                <!-- Map -->
                <div class="overflow-hidden rounded-3xl border border-slate-200 bg-slate-100 shadow-sm">
                    @if ($pengaturan?->maps_embed)
                        <div class="h-full min-h-[400px] [&_iframe]:h-full [&_iframe]:w-full">
                            {!! $pengaturan->maps_embed !!}
                        </div>
                    @else
                        <div class="flex h-full min-h-[400px] items-center justify-center p-8 text-center text-slate-500">
                            Peta tidak tersedia.
                        </div>
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
