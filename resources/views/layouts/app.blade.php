<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />      
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
        <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script> 

        <!-- Styles -->
        @livewireStyles
        {{-- <link rel="stylesheet" href="resources/css/app.css"> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
        
    </head>
    <body class="font-sans antialiased dark:bg-zinc-900">
        <x-banner />

        @include('layouts.partials.header')
        
        @yield('hero')
        @if( Route::is('home')  )
            <main class="container overflow-x-hidden max-w-full flex flex-grow">
        @else
            <main class="container overflow-x-hidden mx-auto px-5 flex flex-grow">
        @endif
                {{ $slot }}
            </main>

        @include('layouts.partials.footer')

        @stack('modals')
        @livewireScripts
    </body>
</html>
