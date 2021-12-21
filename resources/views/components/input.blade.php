@props(['required' => null, 'type' => 'text', 'value' => null, 'autofocus' => null, 'width' => 'full'])

@php

$placeholder = $attributes['placeholder'];

if (!$required) {
    $placeholder .= ' (optioneel)';
    $required = false;
}

@endphp

<div class="relative w-full">

    <x-mm-label :required="$required" for="{{ $attributes['id'] }}"> {{ $attributes['placeholder'] ?? ' ' }}
    </x-mm-label>

    <x-mm-default-input class="w-full" :required="$required" :id="$attributes['id']" :type="$attributes['type']"
        :name="$attributes['name']" :value="$value" :autofocus="$autofocus" type="{{ $attributes['type'] ?? 'text' }}"
        wire:model.defer="{{ $attributes['name'] }}" :placeholder="$placeholder"
        :autocomplete="$attributes['autocomplete'] ?? ' '" />
    <x-mm-error for="{{ $attributes['id'] }}" />
</div>
