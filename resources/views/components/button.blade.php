@php
$class = 'inline-flex items-center justify-center w-full px-6 py-2 text-base font-medium text-white transition duration-200 ease-in-out transform bg-blue-600 border-2 border-transparent rounded-md shadow-sm cursor-pointer disabled:opacity-25  hover:border-blue-500 hover:shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-300/80 whitespace-nowrap disabled:cursor-not-allowed';

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
