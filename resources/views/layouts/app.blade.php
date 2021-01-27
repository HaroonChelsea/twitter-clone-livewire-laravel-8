<!DOCTYPE html>
<html class="{{ session('darkMode') ? 'dark' : '' }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
    <div class="dark:bg-gray-900">
        <div class="flex">
            @include('twitter.sidebar')
            {{ $slot }}
            @livewire('trending-bar')
        </div>
    </div>

    @stack('modals')

    @livewireScripts
    <script>
        window.addEventListener('addedLike', event => {
            location.reload();
        });

    </script>
</body>

</html>
