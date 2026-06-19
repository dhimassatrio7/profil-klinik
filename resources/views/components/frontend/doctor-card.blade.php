@props(['dokter'])

<article class="overflow-hidden rounded-lg border border-slate-200 bg-white shadow-sm transition hover:shadow-md">
    <a href="{{ route('dokter.show', $dokter->id) }}" class="block aspect-[4/3] overflow-hidden bg-slate-100">
        @if ($dokter->foto)
            <img src="{{ asset('storage/' . $dokter->foto) }}" alt="{{ $dokter->nama }}" class="h-full w-full object-cover transition hover:scale-105">
        @else
            <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-blue-50 via-white to-sky-100">
                <div class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-2xl font-bold text-blue-700 shadow-sm">
                    {{ collect(explode(' ', $dokter->nama))->map(fn ($word) => mb_substr($word, 0, 1))->take(2)->implode('') }}
                </div>
            </div>
        @endif
    </a>

    <div class="p-5">
        <p class="text-sm font-semibold text-blue-700">{{ $dokter->spesialis }}</p>
        <h3 class="mt-1 text-lg font-bold text-slate-950 hover:text-blue-700">
            <a href="{{ route('dokter.show', $dokter->id) }}">{{ $dokter->nama }}</a>
        </h3>
        <p class="mt-3 text-sm leading-6 text-slate-600 line-clamp-2">{{ $dokter->jadwal }}</p>
        
        <div class="mt-4 pt-4 border-t border-slate-50">
            <a href="{{ route('dokter.show', $dokter->id) }}" class="text-xs font-bold uppercase tracking-wider text-blue-700 hover:text-blue-800">
                Lihat Profil &rarr;
            </a>
        </div>
    </div>
</article>
