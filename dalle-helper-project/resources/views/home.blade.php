<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                Welcome to <span class="text-orange-500">&lt;DALL•E&gt;</span> <span class="text-gray-900"> Prompt Helper</span>
            </h1>
            {{-- <p class="text-gray-500 text-lg mt-1">Best Blog in the universe</p> --}}
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
            href="http://127.0.0.1:8000/blog">Get Started</a>
        </div>
        @include('components.search-bar')
    @endsection
    <div class="mb-10 w-full">
        <div class="p-5 sm:p-8">
            <livewire:post-card />
        </div>
    </div>
</x-app-layout>
