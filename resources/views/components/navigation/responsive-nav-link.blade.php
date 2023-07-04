@props(['active' => false])

@php
$classes = $active ? 'block pl-3 pr-4 py-2 text-base font-medium text-primary-500  focus:outline-none focus:text-primary-800  transition duration-150 ease-in-out' : 'block pl-3 pr-4 py-2  text-base font-medium text-slate-800 hover:text-primary-500   focus:outline-none focus:text-primary-500   transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
