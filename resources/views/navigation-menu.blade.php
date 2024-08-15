<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-logo />
        </a>
        <div class="top-menu ml-10">
            <ul class="flex space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('post.index') }}" :active="request()->routeIs('post.index')">
                    {{ __('My Prompts') }}
                </x-nav-link>
                <x-nav-link href="{{ route('helper') }}" :active="request()->routeIs('helper.index')">
                    {{ __('Helper') }}
                </x-nav-link>
                @if(auth()->user() && auth()->user()->hasRole('admin'))
                <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Admin Dashboard') }}
                </x-nav-link>
                @endif
            </ul>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest') 
        @endauth
    </div>
</nav>