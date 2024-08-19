@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-400 text-sm font-bold leading-5 text-gray-800 focus:outline-none focus:border-orange-700 transition duration-150 ease-in-out dark:text-white dark:hover:border-orange-600'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-gray-800 hover:text-orange-400 hover:border-gray-300 dark:hover:border-orange-500 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out dark:text-white';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
