@props(['disabled' => false])

@php
$extra_classes = $attributes->get('class') ?? null;
$class = $extra_classes . ' border outline-none border-gray-400/40 placeholder:text-[0.9rem] text-gray-700 focus:border-gold-300 disabled:italic disabled:bg-gray-300/20 bg-white/50 relative py-2.5 focus:ring focus:ring-gold-200 focus:ring-opacity-50 rounded-md  text-[0.9rem] read-only:italic read-only:bg-gray-300/20 disabled:italic disabled:bg-gray-300/20 ';
@endphp

@isset($errors)
    @error($attributes['id'])
        @php
            $class = 'border-red-500/40 ' . $class;
        @endphp
    @enderror
@endisset

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => $class,
]) !!}>
