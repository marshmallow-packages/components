@props(['required' => null, 'type' => 'text', 'value' => null, 'autofocus' => null, 'width' => 'full', 'hideLabel' => false, 'readonly' => null, 'disabled' => false])

@php

$placeholder = $attributes['placeholder'] ?: 'Wachtwoord';

$defer = false;
$lazy = false;
if ($attributes->has('defer')) {
    $defer = $attributes['defer'] == 'true' || $attributes['defer'] == true;
}

if ($attributes->has('lazy')) {
    $lazy = $attributes['lazy'] == 'true' || $attributes['lazy'] == true;
}
$required = $required == 1 || $required == true ? true : false;

if (!$required) {
    if (!$hideLabel) {
        $placeholder .= ' (optioneel)';
    }
    $required = false;
}
@endphp


<div class="relative w-full" x-data="{ showPassword: false }">

    @if (!$hideLabel)
        <x-mm-label :required="$required" for="{{ $attributes['id'] }}">
            {{ $attributes['label'] ?? $attributes['placeholder'] }}
        </x-mm-label>
    @endif

    @if ($defer)
        <x-mm-default-input class="w-full" :required="$required" :id="$attributes['id']" :x-ref="$attributes['x-ref']" :name="$attributes['name']"
            :value="$value" :autofocus="$autofocus" type="{{ $attributes['type'] ?? 'password' }}"
            wire:model.defer="{{ $attributes['name'] }}" :placeholder="$placeholder" :autocomplete="$attributes['autocomplete'] ?? ' '" :readonly="$readonly"
            :disabled="$disabled" />
    @else
        <x-mm-default-input class="w-full" :required="$required" :id="$attributes['id']" :x-ref="$attributes['x-ref']" :name="$attributes['name']"
            :value="$value" :autofocus="$autofocus" type="{{ $attributes['type'] ?? 'password' }}"
            wire:model="{{ $attributes['name'] }}" :placeholder="$placeholder" :autocomplete="$attributes['autocomplete'] ?? ' '" :readonly="$readonly"
            :disabled="$disabled" />
    @endif

    <x-mm-error for="{{ $attributes['id'] }}" />
</div>
