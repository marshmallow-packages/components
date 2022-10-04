@props(['required' => null, 'width' => 'full', 'value' => null, 'autofocus' => null, 'options'])

<div class="relative w-full">

    <x-mm-label :required="$required" for="{{ $attributes['id'] }}">
        {{ $attributes['placeholder'] ?? ' ' }}
    </x-mm-label>

    <fieldset class="col-span-6 sm:col-span-3">
        <div class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">
            @foreach ($options as $option)
                @if ($option['id'] !== '' && !is_null($option['id']))
                    <div class="relative flex items-start min-w-0 py-4 text-sm group">
                        <label for="option-{{ $option['id'] }}"
                            class="flex-1 font-medium text-gray-800 select-none group-hover:text-gold-600">
                            {{ $option['title'] }}
                            @if ($option['tooltip'])
                                <x-mm-tooltip id="{{ $option['id'] . md5($option['tooltip']) }}" :content="$option['tooltip']" />
                            @endif
                        </label>
                        <input id="option-{{ $option['id'] }}" name="option-{{ $option['id'] }}" type="checkbox"
                            wire:model.defer="{{ $attributes['name'] }}.{{ $option['id'] }}" value="{{ $option['id'] }}"
                            class="w-4 h-4 rounded text-gold-600 border-gray-400/40 focus:ring-gold-500 group-hover:border-gold-600">
                    </div>
                @endif
            @endforeach
        </div>
    </fieldset>
    <x-mm-error for="option-{{ $option['id'] }}" />
</div>
