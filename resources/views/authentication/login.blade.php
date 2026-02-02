<x-form.guest>
    <!-- This is the application Logo -->
    <!-- This is the header section -->
    <form action="" method="post" class="p-10">
        @csrf
        <x-form.form-input 
            type="email" 
            name="email" 
            value="{{ old('email') }}"
            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>'
            required>
        </x-form.form-input>

        <x-form.form-input 
            type="password" 
            name="password" 
            icon='<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>'
            required>
        </x-form.form-input>

        <x-form.form-button class="mt-6 bg-greendark text-white hover:bg-greenlight shadow-greenlight shadow-lg"> Sign
            In
        </x-form.form-button>

        <div class="text-sm text-slate-600 hover:text-slate-900 pt-4">
            <p>Don't have an account? <a href="register" class="text-blue-500">Sign up</a></p>
        </div>
    </form>
</x-form.guest>