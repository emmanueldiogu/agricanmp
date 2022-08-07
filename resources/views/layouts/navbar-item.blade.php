@props(['active'])

@php
$classes = $active ?? false ? 'inline-block w-full px-4 py-2 rounded text-white bg-primary hover:bg-opacity-90' : 'inline-block w-full px-4 py-2 rounded hover:text-white hover:bg-primary';
@endphp


<a {{ $attributes->merge(['class' => $classes, 'href' => $href]) }}>
    {{ $slot }}
</a>
