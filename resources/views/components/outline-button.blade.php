@php
$class = 'inline-flex items-center justify-center w-auto px-6 py-3 text-sm font-medium leading-none align-baseline transition duration-200 ease-in-out transform bg-transparent border-2 rounded-full shadow-sm cursor-pointer text-primary-500 border-primary-500 drop-shadow-md button disabled:opacity-25 hover:border-primary-500 hover:shadow-sm hover:bg-primary-500 focus:outline-none hover:text-white focus:ring-2 focus:ring-offset-2 focus:ring-primary-300/80 whitespace-nowrap disabled:cursor-not-allowed';

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
