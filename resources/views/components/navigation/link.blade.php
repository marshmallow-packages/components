@props(['active' => false])

@php
    $default_class = 'inline-flex items-center px-1 pt-1 tracking-wide text-[15px] font-semibold leading-5 focus:outline-none transition duration-150 ease-in-out';
    $active_class = 'text-primary-600 cursor-default';
    $inactive_class = 'hover:text-opacity-50 text-gray-800';
    $classes = $default_class . ' ' . ($active ? $active_class : $inactive_class);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
