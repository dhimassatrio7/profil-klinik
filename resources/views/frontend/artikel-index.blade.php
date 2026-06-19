@php
    $clinicName = $pengaturan?->nama_klinik ?? 'Klinik Medika Keluarga';
@endphp

<x-layouts.frontend :title="'Artikel Kesehatan - ' . $clinicName">
    <x-frontend.nav :pengaturan="$pengaturan" />

    <main class="py-16">
        <x-frontend.container>
            <x-frontend.section-heading
                eyebrow="Edukasi"
                title="Artikel & Tips Kesehatan Terbaru"
                description="Informasi dari tim medis kami untuk membantu Anda dan keluarga menjaga kesehatan sehari-hari."
            />

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($artikels as $artikel)
                    <x-frontend.article-card :artikel="$artikel" />
                @empty
                    <div class="col-span-full rounded-lg border border-slate-200 bg-white p-12 text-center text-slate-600">
                        Belum ada artikel yang dipublikasikan.
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $artikels->links() }}
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
