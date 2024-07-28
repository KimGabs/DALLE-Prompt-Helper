<x-app-layout>
    <head>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@alpinejs/alpine@2.8.2/dist/alpine.min.js" defer></script>

    </head>
    <main class="container mx-auto px-5 flex flex-grow">
        <div class="w-full grid grid-cols-1 gap-10">
                @livewire('helper')
                @livewire('parameter-modal', ['type' => 'Styles'])

        </div>
    </main>

    @livewireScripts
        
</x-app-layout>