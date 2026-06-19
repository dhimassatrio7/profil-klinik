@php
    $clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
@endphp

<x-layouts.frontend :title="'Layanan Kami - ' . $clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main class="py-16">
        <x-frontend.container>
            <x-frontend.section-heading
                eyebrow="Layanan"
                title="Layanan kesehatan yang kami sediakan"
                description="Pilih layanan klinik sesuai kebutuhan keluarga, dari konsultasi umum sampai pemeriksaan kesehatan berkala."
            />

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($layanans as $layanan)
                    <x-frontend.service-card :layanan="$layanan" />
                @empty
                    <div class="col-span-full rounded-lg border border-slate-200 bg-white p-12 text-center text-slate-600">
                        Belum ada layanan aktif saat ini.
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $layanans->links() }}
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
