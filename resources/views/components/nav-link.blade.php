@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-blue-600 text-sm text-white/90'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm text-gray-600 hover:text-white hover:border-blue-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
