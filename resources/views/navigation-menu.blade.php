<nav class="flex flex-wrap items-center justify-between py-3 px-6 border-b border-gray-100 dark:border-neutral-950 dark:bg-neutral-900">
    <div id="nav-left" class="md:flex items-center">
        <a href="{{ route('home') }}">
            <x-application-logo />
        </a>

        {{-- Navigation Links --}}
        <div class="top-menu hidden w-full md:block md:w-auto md:ml-10">
            <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                <x-nav-link wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link wire:navigate href="{{ route('post.index') }}" :active="request()->routeIs('post.index')">
                    {{ __('My Prompts') }}
                </x-nav-link>
                <x-nav-link wire:navigate href="{{ route('helper.index') }}" :active="request()->routeIs('helper.index')">
                    {{ __('Helper') }}
                </x-nav-link>
                @if(auth()->user() && auth()->user()->hasRole('admin'))
                <x-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Admin Dashboard') }}
                </x-nav-link>
                @endif
            </ul>
        </div>
    </div>


    <div id="nav-right" class="flex items-center md:space-x-6">

        <!-- Hamburger Menu for Mobile -->
        <div class="flex md:hidden ml-auto">
            <button id="nav-toggle" data-collapse-toggle="nav-menu" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-8">
                    <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                </svg>                  
            </button>
        </div>

        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest') 
        @endauth
    </div>

    {{-- Hamburger Navigation Links --}}
    <div id="nav-menu" class="top-menu mt-2 pt-2 hidden w-full md:hidden md:w-auto md:ml-10">
        <ul class="flex flex-col md:flex-row md:space-y-0 md:space-x-4">
            <x-responsive-nav-link wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link wire:navigate href="{{ route('post.index') }}" :active="request()->routeIs('post.index')">
                {{ __('My Prompts') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link wire:navigate href="{{ route('helper.index') }}" :active="request()->routeIs('helper.index')">
                {{ __('Helper') }}
            </x-responsive-nav-link>
            @if(auth()->user() && auth()->user()->hasRole('admin'))
            <div class="relative" x-data="{ open: false }">
                <!-- Trigger for the dropdown -->
                <button x-on:click="open = ! open" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
                    {{ __('Admin Dashboard') }}
                    <svg class="inline w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.292 7.707a1 1 0 011.414 0L10 11.414l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
        
                <!-- Dropdown Links -->
                <div x-show="open" class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg">
                    <x-responsive-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Dashboard Overview') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link wire:navigate href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                        {{ __('Manage Users') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link wire:navigate href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                        {{ __('Manage Posts') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link wire:navigate href="{{ route('parameters.index') }}" :active="request()->routeIs('parameters.index')">
                        {{ __('Manage Parameters') }}
                    </x-responsive-nav-link>
                    <!-- Add more dropdown links as needed -->
                </div>
            </div>
            @endif

            @auth
            <x-responsive-nav-link wire:navigate href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                {{ __('Manage Account') }}
            </x-responsive-nav-link>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <x-responsive-nav-link wire:navigate href="{{ route('logout') }}"  @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
            @endauth
            @guest
            <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
            Login
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
            Register
            </x-responsive-nav-link>
            @endguest
        </ul>
    </div>
</nav>

<script>
    // JavaScript for toggling the mobile menu
    document.getElementById('nav-toggle').addEventListener('click', function () {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('hidden');
    });
</script>