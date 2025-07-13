<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Blog Technology') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-100">
        {{-- The new navigation menu, which is its own Livewire component --}}
        <livewire:layout.navigation />

        <!-- Page Content -->
        <div class="container mx-auto flex py-8">
            {{-- Main Content Area (for the full-page component) --}}
            <main class="w-3/4 pr-4">
                {{ $slot }}
            </main>

            {{-- Right Sidebar Area --}}
            <aside class="w-1/4 pl-4">
                {{-- We will create a component for this next --}}
                <x-sidebar /> 
            </aside>
        </div>
        @livewireScripts
    </body>
</html>