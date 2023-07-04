@php
$class = 'inline-flex items-center justify-center px-6 py-3 text-base font-medium leading-none align-baseline transition duration-200 ease-in-out transform bg-white border-2 border-white rounded-full shadow-sm cursor-pointer text-slate-600 border-1 border-slate-200/40 disabled:opacity-25 hover:border-primary-600 hover:text-white hover:shadow-sm hover:bg-primary-600 focus:border-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-300/80 whitespace-nowrap disabled:cursor-not-allowed';

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
