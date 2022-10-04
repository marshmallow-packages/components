@props(['required' => null, 'type' => 'number', 'min' => null, 'max' => null, 'value' => null, 'autofocus' => null, 'width' => 'full', 'hideLabel' => false, 'readonly' => null, 'disabled' => false])

@php

$placeholder = $attributes['placeholder'];

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
    $placeholder .= ' (optioneel)';
    $required = false;
}
@endphp


<div class="relative w-full">

    @if (!$hideLabel)
        <x-mm-label :required="$required" for="{{ $attributes['id'] }}">
            {{ $attributes['label'] ?? $attributes['placeholder'] }}
        </x-mm-label>
    @endif

    @if ($defer)
        <x-mm-default-input class="w-full" :required="$required" :id="$attributes['id']" :min="$min" :max="$max"
            :type="$attributes['type']" :name="$attributes['name']" :value="$value" :autofocus="$autofocus"
            type="{{ $attributes['type'] ?? 'number' }}" wire:model.defer="{{ $attributes['name'] }}"
            x-mask.blocks="[{{ $max ? Str::of($max)->length : 9999 }}]" :placeholder="$placeholder" :autocomplete="$attributes['autocomplete'] ?? ' '"
            :readonly="$readonly" :disabled="$disabled" />
    @elseif($lazy)
        <x-mm-default-input class="w-full" :required="$required" :id="$attributes['id']" :min="$min" :max="$max"
            :type="$attributes['type']" :name="$attributes['name']" :value="$value" :autofocus="$autofocus"
            type="{{ $attributes['type'] ?? 'number' }}" wire:model.lazy="{{ $attributes['name'] }}"
            x-mask.blocks="[{{ $max ? Str::of($max)->length : 9999 }}]" :placeholder="$placeholder" :autocomplete="$attributes['autocomplete'] ?? ' '"
            :readonly="$readonly" :disabled="$disabled" />
    @else
        <x-mm-default-input class="w-full" :required="$required" :id="$attributes['id']" :min="$min" :max="$max"
            :type="$attributes['type']" :name="$attributes['name']" :value="$value" :autofocus="$autofocus"
            type="{{ $attributes['type'] ?? 'number' }}" wire:model="{{ $attributes['name'] }}"
            x-mask.blocks="[{{ $max ? Str::of($max)->length : 9999 }}]" :placeholder="$placeholder" :autocomplete="$attributes['autocomplete'] ?? ' '"
            :readonly="$readonly" :disabled="$disabled" />
    @endif
    <x-mm-error for="{{ $attributes['id'] }}" />
</div>
