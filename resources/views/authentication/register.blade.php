<x-form.guest>
    <!-- <This is the application Logo
    This is the header section -->

    <form action="" method="post">
        @csrf
        <x-form.form-label>Name</x-form.form-label>
        <x-form.form-input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" required
            autofocus></x-form.form-input>

        <x-form.form-label class="mt-4">Email Address</x-form.form-label>
        <x-form.form-input type="email" name="email" value="{{ old('email') }}" placeholder="Your email address"
            required></x-form.form-input>

        <x-form.form-label class="mt-4">Password</x-form.form-label>
        <x-form.form-input type="password" name="password" placeholder="Create a password" required></x-form.form-input>

        <x-form.form-button class="mt-6 bg-greendark text-white hover:bg-greenlight shadow-greenlight shadow-lg"> Sign
            Up
        </x-form.form-button>

        <div class="text-sm text-slate-600 hover:text-slate-900 pt-4">
            <p>Have an account? <a href="login" class="text-blue-500">Sign in</a></p>
        </div>
</x-form.guest>