@php
$class = 'inline-flex items-center justify-center w-full px-6 py-2 text-base font-medium text-gray-700 border-2 border-gray-300 rounded-md shadow-sm cursor-pointer hover:bg-gray-50 disabled:opacity-25 disabled:cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300/80';

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
