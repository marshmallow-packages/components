@props(['required' => null, 'value' => null, 'autofocus' => null])

<div class="relative mt-1">
    <x-mm-default-input :required="$required" :id="$attributes['id']" :type="$attributes['type']"
        :name="$attributes['name']" :value="$value" :autofocus="$autofocus" type="{{ $attributes['type'] ?? 'text' }}"
        wire:model="{{ $attributes['name'] }}" :placeholder="$attributes['placeholder'] ?? ' '"
        :autocomplete="$attributes['autocomplete'] ?? ' '" />
    <x-mm-label :required="$required" for="{{ $attributes['id'] }}"> {{ $attributes['placeholder'] ?? ' ' }}
    </x-mm-label>
    <div class="pt-2">
        <x-mm-error for="{{ $attributes['id'] }}" />
    </div>
</div>
