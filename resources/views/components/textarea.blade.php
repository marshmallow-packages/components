@props(['disabled' => false, 'required' => null])

<div class="relative" x-data="{ active: false, count: 0, maxCount: 0 }"
    x-init="count = $refs.countme.value.length; maxCount = $refs.countme.maxLength ">
    <textarea rows="4" maxLength="500" x-ref="countme" x-on:focus="active = true" x-on:click.outside="active = false"
        wire:model="{{ $attributes['name'] }}"
        placeholder="{{ $attributes['placeholder'] ?? ' ' }}@if ($required) * @endif"
        x-on:keyup="count = $refs.countme.value.length" {{ $disabled ? 'disabled' : '' }}
        {!! $attributes->merge(['class' => 'w-full min-h-10 placeholder-white-600 text-md bg-transparent border-2 p-3 text-white-500 font-larsseit border-gray-400 placeholder-text-md peer focus:outline-none focus:ring-0 focus:border-2 focus:border-yellow-600']) !!}>{{ $slot }}</textarea>

    <div class="mt-1 text-sm text-white-600 text-opacity-70" x-cloak x-show="active && maxCount > 0">
        <span x-html="count"></span> / <span x-html="maxCount"> </span> karakters
    </div>

    <x-forms.input-error for="{{ $attributes['id'] }}" />
</div>
