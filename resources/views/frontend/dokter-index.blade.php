@php
    $clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
@endphp

<x-layouts.frontend :title="'Tim Dokter Kami - ' . $clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main class="py-16">
        <x-frontend.container>
            <x-frontend.section-heading
                eyebrow="Tim Medis"
                title="Dokter profesional yang siap membantu"
                description="Jadwal dokter aktif ditampilkan agar pasien mudah memilih waktu kunjungan dan tenaga medis yang sesuai."
            />

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @forelse ($dokters as $dokter)
                    <x-frontend.doctor-card :dokter="$dokter" />
                @empty
                    <div class="col-span-full rounded-lg border border-slate-200 bg-white p-12 text-center text-slate-600">
                        Belum ada dokter aktif saat ini.
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $dokters->links() }}
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
