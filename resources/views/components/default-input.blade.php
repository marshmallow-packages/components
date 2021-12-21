@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-400/40 focus:border-indigo-300 focus:ring text-[14px] focus:ring-indigo-200 py-2.5 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
