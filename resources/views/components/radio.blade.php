@props(['required' => null, 'type' => 'text', 'value' => null, 'autofocus' => null, 'width' => 'full', 'hideLabel' => false, 'options' => []])

@php

$placeholder = $attributes['placeholder'];

if (!$required) {
    if (!$hideLabel) {
        $placeholder .= ' (optioneel)';
    }
    $required = false;
}

@endphp


<div class="relative w-full">

    @if (!$hideLabel)
        <x-mm-label :required="$required" for="{{ $attributes['id'] }}"> {{ $attributes['placeholder'] ?? ' ' }}
        </x-mm-label>
    @endif

    <div class="mt-2 space-y-4 md:mt-4">
        @foreach ($options as $option)
            <div class="flex items-center ml-2 ">
                <input wire:model="{{ $attributes['name'] }}" id="id_{{ $attributes['id'] }}_{{ $option['id'] }}"
                    name="{{ $attributes['name'] }}" type="radio" value="{{ $option['id'] }}"
                    @if ($attributes['x-on:change']) x-on:change="{{ $attributes['x-on:change'] }}" @endif
                    class="w-4 h-4 border-gray-300 peer text-gold-500 focus:ring-gold-500/30">
                <label for="id_{{ $attributes['id'] }}_{{ $option['id'] }}"
                    class="block ml-3 text-sm font-medium text-gray-700 peer-focus:font-semibold peer-checked:font-semibold">
                    {{ $option['title'] }}
                    @if ($option['tooltip'])
                        <x-mm-tooltip id="{{ $option['id'] . md5($option['tooltip']) }}" :content="$option['tooltip']" />
                    @endif
                </label>
            </div>
        @endforeach
        <x-mm-error for="id_{{ $attributes['id'] }}_{{ $option['id'] }}" />
    </div>
</div>
