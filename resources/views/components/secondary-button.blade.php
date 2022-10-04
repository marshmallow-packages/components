@php
$class = 'inline-flex items-center justify-center px-6 py-2 font-semibold transition duration-200 ease-in-out transform border-2 border-transparent rounded-full shadow-sm cursor-pointer text-md text-primary-600 bg-primary-100 button disabled:opacity-25 hover:border-primary-500 hover:shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-300/80 whitespace-nowrap disabled:cursor-not-allowed';

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
