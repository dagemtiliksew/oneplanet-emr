@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 bg-purple-100'
            : 'flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
