@props(['required' => null, 'type' => 'text', 'value' => null, 'autofocus' => null, 'width' => 'full', 'hideLabel' => false, 'options' => [], 'excludeChoices' => []])

@php

$placeholder = $attributes['placeholder'];

if (!$required) {
    $placeholder .= ' (optioneel)';
    $required = false;
}

$choices = $options->choices->reject(function ($option) use ($excludeChoices) {
    return in_array($option->id, $excludeChoices);
});

$loop_count = 0;

@endphp


<div class="relative w-full">

    @if (!$hideLabel)
        <x-mm-label :required="$required" for="{{ $attributes['id'] }}">
            {{ $attributes['placeholder'] ?? ' ' }}
        </x-mm-label>
    @endif

    <div @class([
        'grid grid-cols-2 gap-2 mt-2 md:mt-4 md:gap-6  md:grid-cols-4 ',
        'xl:grid-cols-5 xl:gap-4' => count($choices) >= 5,
    ])>
        @foreach ($options->choices as $value => $option)
            @if (in_array($option->id, $excludeChoices))
                @continue;
            @endif

            @php
                $loop_count++;
            @endphp

            <div class="items-center group" @if ($loop_count >= 10) x-show="expanded" x-collapse @endif>
                <input wire:model="{{ $attributes['name'] }}" id="id_{{ $attributes['id'] }}_{{ $option->id }}"
                    x-on:change="checkedValue = $event.target.value;" name="{{ $attributes['name'] }}" type="radio"
                    value="{{ $option->id }}"
                    class="hidden w-4 h-4 border-gray-300 peer text-primary-500 focus:ring-primary-500/30" />
                <label for="id_{{ $attributes['id'] }}_{{ $option->id }}"
                    class="relative block w-full overflow-hidden text-sm font-medium text-gray-700 transition duration-500 ease-in-out transform border shadow cursor-pointer grow hover:shadow-md before:hover:-translate-y-1 before:peer-checked:-translate-y-1 peer-checked:ring-primary-500 peer-checked:ring-opacity-40 hover:scale-105 rounded-xl border-gray-300/50 peer-focus:font-semibold peer-checked:shadow-md hover:border-2 peer-checked:border-2 peer-checked:ring-2 peer-checked:border-primary-500 peer-hover:border-primary-400 ">

                    <img class="object-cover w-full h-full cursor-pointer " src="{{ $option->thumbnail_path }}">

                    <div :class="checkedValue == '{{ $option->id }}' ? 'block' : ' group-hover:block hidden'"
                        class="absolute inset-x-0 bottom-0 z-10 py-2 font-semibold text-center bg-white/50">
                        {{ $option->getTitle() }}
                    </div>
                </label>
            </div>
        @endforeach
    </div>
    @if (count($choices) >= 10)
        <div class="relative z-20 flex w-full py-4 bg-gradient-to-b from-transparent via-white/80 to-transparent"
            :class="{ '-mt-8': !expanded }">
            <div x-show="!expanded" x-cloak class="mx-auto">
                <x-mm-button class="mt-1 !px-4 py-2 h-8 font-semibold mx-auto !text-sm hover:text-primary-500"
                    x-on:click="expanded = !expanded">
                    {{ __('Laat meer zien') }}
                    <i class="ml-2 text-white fa-solid fa-arrow-down "></i>
                </x-mm-button>
            </div>
            <div x-show="expanded" x-cloak class="mx-auto">
                <x-mm-button class="mt-1 !px-4 py-2 h-8 font-semibold mx-auto !text-sm hover:text-primary-500"
                    x-on:click="expanded = !expanded">
                    {{ __('Laat minder zien') }}
                    <i class="ml-2 text-white fa-solid fa-arrow-up"></i>
                </x-mm-button>
            </div>
        </div>
    @endif
    <x-mm-error for="id_{{ $attributes['id'] }}_{{ $option->id }}" />
</div>
