@props(['artikel'])

<article class="flex h-full flex-col overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm transition hover:shadow-md">
    <a href="{{ route('artikel.show', $artikel->slug) }}" class="block overflow-hidden">
        @if ($artikel->gambar)
            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="aspect-video w-full object-cover transition hover:scale-105">
        @else
            <div class="aspect-video bg-gradient-to-br from-slate-100 via-white to-blue-50"></div>
        @endif
    </a>

    <div class="flex flex-1 flex-col p-5">
        <p class="text-xs font-semibold uppercase tracking-wide text-blue-700">
            {{ optional($artikel->tanggal_publish)->translatedFormat('d M Y') }}
        </p>
        <h3 class="mt-3 text-lg font-bold leading-snug text-slate-950 hover:text-blue-700">
            <a href="{{ route('artikel.show', $artikel->slug) }}">{{ $artikel->judul }}</a>
        </h3>
        <p class="mt-3 line-clamp-3 text-sm leading-6 text-slate-600">{{ $artikel->excerpt }}</p>
        
        <div class="mt-auto pt-5">
            <a href="{{ route('artikel.show', $artikel->slug) }}" class="text-xs font-bold uppercase tracking-wider text-blue-700 hover:text-blue-800">
                Baca Selengkapnya &rarr;
            </a>
        </div>
    </div>
</article>
