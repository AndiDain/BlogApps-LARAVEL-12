<div>
    <button {{ $attributes->merge(['class' => 'flex w-full justify-center rounded-full bg-greendark py-2.5 px-3 text-sm font-semibold text-white shadow-md shadow-greenlight hover:bg-greenlight focus-visible:outline 
    focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-greenlight transition-all active:scale-[0.98]']) }}> {{ $slot }} </button>
</div>