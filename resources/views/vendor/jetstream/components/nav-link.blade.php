@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 pt-1 border-b-2 border-redOne text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-redOne transition'
            : 'inline-flex items-center px-2 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-redOne focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>