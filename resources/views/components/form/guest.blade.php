@props(['header'])

<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full antialised text-slate-900">
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-18">
        <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
            <!-- <div class="mx-auto h-12 w-12 rounded-xl bg-greendark flex items-center justify-center shadow-greenlight shadow-lg">
                <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div> -->
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            {{ $slot }}
        </div>
    </div>
</body>

</html>