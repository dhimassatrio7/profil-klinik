@props(['layanan'])

<article class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50">
        @if ($layanan->icon)
            <img src="{{ asset('storage/' . $layanan->icon) }}" alt="{{ $layanan->nama_layanan }}" class="h-7 w-7 object-contain">
        @else
            <span class="text-xl font-bold text-blue-700">+</span>
        @endif
    </div>

    <h3 class="mt-5 text-lg font-bold text-slate-950 hover:text-blue-700">
        <a href="{{ route('layanan.show', $layanan->id) }}">{{ $layanan->nama_layanan }}</a>
    </h3>
    <p class="mt-3 line-clamp-4 text-sm leading-6 text-slate-600">{{ $layanan->deskripsi }}</p>
    
    <div class="mt-5">
        <a href="{{ route('layanan.show', $layanan->id) }}" class="text-xs font-bold uppercase tracking-wider text-blue-700 hover:text-blue-800">
            Selengkapnya &rarr;
        </a>
    </div>
</article>
