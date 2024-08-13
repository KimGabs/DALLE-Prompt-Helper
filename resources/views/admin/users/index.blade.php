<x-app-layout>
    <div class="flex w-full min-h-screen overflow-hidden">
        <x-sidebar />
        {{-- <div class="w-full text-left py-8">
            
        </div> --}}
        <div class="w-full p-5">
            <h1 class="text-2xl font-bold subpixel-antialiased">Users</h1>
            <div class="w-full text-left py-5">
                    <a href="{{ route('parameters.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg inline-flex hover:bg-blue-700">
                        <span class="inline-flex flex text-center items-center gap-1"> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd" />
                            </svg>           
                            Create
                        </span>
                    </a>
            </div>
            @if(session('success'))
                <p class="text-green-700 pb-6">{{ session('success') }}</p>
            @endif                  
                @livewire('user-list')
            </div>
        </div>
        
        
    </div>
</x-app-layout>