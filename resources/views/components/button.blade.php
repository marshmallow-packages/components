@php
$class = 'inline-flex items-center justify-center px-6 py-3 text-base font-medium leading-none text-white align-baseline transition duration-200 ease-in-out transform border-2 border-transparent rounded-full shadow-sm cursor-pointer bg-primary-500 button disabled:opacity-25 hover:border-primary-600 hover:shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-300/80 whitespace-nowrap disabled:cursor-not-allowed';

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
