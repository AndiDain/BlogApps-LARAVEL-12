@props(['type' => 'text', 'name' => '', 'value' => '', 'icon' => null])

<div class="relative">
    @if ($icon)
        <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400">
            {!! $icon !!}
        </div>
    @endif

    <input {{ $attributes->merge(['class' => 'block w-full rounded-full border-slate-300 py-2.5 ' . ($icon ? 'pl-10' : 'px-3') . ' px-3 my-6 shadow-sm focus:border-indigo-500
     focus:ring-indigo-500 sm:text-sm transition-all outline-none border']) }} type="{{ $type }}" name="{{ $name }}" value="{{ $value }}">
</div>