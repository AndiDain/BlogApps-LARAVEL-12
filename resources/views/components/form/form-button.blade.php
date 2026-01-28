<div>
    <button {{ $attributes->merge(['class' => 'flex w-full justify-center rounded-lg bg-greendark px-4 py-2.5 text-sm font-semibold text-white shadow-md shadow-greenlight hover:bg-greenlight focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-greenlight transition-all active:scale-[0.98]']) }}> {{ $slot }} </button>
</div>