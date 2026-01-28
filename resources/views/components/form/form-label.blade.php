@props(['for' => ''])

<div>
    <label {{ $attributes->merge(['class' => 'block text-sm font-semibold text-slate-700 py-2']) }} for="{{ $for }}">{{ $slot }}</label>
</div>