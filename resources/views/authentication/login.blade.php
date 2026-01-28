<x-form.guest>
    <!-- This is the application Logo -->
    <!-- This is the header section -->
    <form action="" method="post">
        @csrf
        <x-form.form-label>Email Address</x-form.form-label>
        <x-form.form-input type="email" name="email" value="{{ old('email') }}" placeholder="Your email address"
            required></x-form.form-input>

        <x-form.form-label class="mt-4">Password</x-form.form-label>
        <x-form.form-input type="password" name="password" placeholder="Enter your password" required></x-form.form-input>

        <x-form.form-button class="mt-6 bg-greendark text-white hover:bg-greenlight shadow-greenlight shadow-lg"> Sign In
        </x-form.form-button>

        <div class="text-sm text-slate-600 hover:text-slate-900 pt-4">
            <p>Don't have an account? <a href="register" class="text-blue-500">Sign up</a></p>
        </div>
    </form>
</x-form.guest>