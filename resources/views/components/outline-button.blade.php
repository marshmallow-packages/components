@php
$class = 'inline-flex items-center justify-center w-full px-6 py-2 text-base font-medium transition duration-200 ease-in-out transform bg-transparent border-2 rounded-full shadow-sm cursor-pointer text-primary-500 border-primary-500 disabled:opacity-25 hover:border-primary-500 hover:text-white hover:shadow-sm hover:bg-primary-500/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-300/80 whitespace-nowrap disabled:cursor-not-allowed';

$href = $attributes['href'] ?? null;
@endphp

@if ($attributes['href'])
    <a {{ $attributes->merge(['href' => $href, 'class' => $class]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'submit', 'class' => $class]) }}>
        {{ $slot }}
    </button>
@endif
