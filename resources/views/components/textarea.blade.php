@props(['disabled' => false, 'required' => null])

<div class="relative" x-data="{ active: true, count: 0, maxCount: 0 }"
    x-init="count = $refs.countme.value.length; maxCount = $refs.countme.maxLength ">
    <x-mm-label class="mb-1 ml-1" :required="$required" for="{{ $attributes['id'] }}">
        {{ $attributes['placeholder'] ?? ' ' }}
    </x-mm-label>

    <textarea rows="4" maxLength="500" x-ref="countme" wire:model="{{ $attributes['name'] }}"
        placeholder="{{ $attributes['placeholder'] ?? ' ' }}@if ($required) * @endif"
        x-on:keyup="count = $refs.countme.value.length" {{ $disabled ? 'disabled' : '' }}
        {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring text-[14px] focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full min-h-10 placeholder-white-600 bg-transparent border p-3  placeholder-text-md peer focus:outline-none']) !!}>{{ $slot }}</textarea>

    <div class="mt-1 text-sm text-gray-400 text-opacity-70" x-cloak x-show="active && maxCount > 0">
        <span x-html="count"></span> / <span x-html="maxCount"> </span> {{ __('karakters') }}
    </div>

    <x-mm-error for="{{ $attributes['id'] }}" />
</div>
