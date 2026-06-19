@props(['eyebrow' => null, 'title', 'description' => null])

<div {{ $attributes->merge(['class' => 'max-w-3xl']) }}>
    @if ($eyebrow)
        <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">{{ $eyebrow }}</p>
    @endif

    <h2 class="mt-3 text-3xl font-bold tracking-normal text-slate-950 sm:text-4xl">{{ $title }}</h2>

    @if ($description)
        <p class="mt-4 text-base leading-7 text-slate-600">{{ $description }}</p>
    @endif
</div>
