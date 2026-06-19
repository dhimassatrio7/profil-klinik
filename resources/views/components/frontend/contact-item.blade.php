@props(['label', 'value'])

@if ($value)
    <div class="rounded-lg border border-slate-200 bg-white p-5">
        <p class="text-sm font-semibold text-slate-500">{{ $label }}</p>
        <p class="mt-2 text-base font-bold text-slate-950">{{ $value }}</p>
    </div>
@endif
