@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => ' w-24 px-4 py-5 mt-2
    text-3xl font-semibold text-center bg-[#fff] border-b-0 border-l-0 relative border-r-0 border-pink-500
    bg-opacity-100 focus:bg-opacity-100 border-t-[5px] placeholder:text-gray-400 focus:border-green-500 focus:ring-green-500',
]) !!} type="number">
