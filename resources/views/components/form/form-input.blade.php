@props(['type' => 'text', 'name' => '', 'value' => ''])

<div>
    <input {{ $attributes->merge(['class' => 'block w-full rounded-lg border-slate-300 py-2.5 px-3 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm transition-all outline-none border']) }} type="{{ $type }}" name="{{ $name }}" value="{{ $value }}">
</div>