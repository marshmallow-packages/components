@props(['required' => null, 'width' => 'full', 'value' => null, 'autofocus' => null, 'options'])

<div class="relative w-full">

    <x-mm-label :required="$required" for="{{ $attributes['id'] }}">
        {{ $attributes['placeholder'] ?? ' ' }}
    </x-mm-label>

    <fieldset class="col-span-6 sm:col-span-3">
        <div class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">
            @foreach ($options as $value => $option)
                @if ($value !== '' && !is_null($value))
                    <div class="relative flex items-start min-w-0 py-4 text-sm group">
                        <label for="option-{{ $value }}"
                            class="flex-1 font-medium text-gray-800 select-none group-hover:text-blue-600">
                            {{ $option }}
                        </label>
                        <input id="option-{{ $value }}" name="option-{{ $value }}" type="checkbox"
                            wire:model.defer="{{ $attributes['name'] }}.{{ $value }}"
                            value="{{ $value }}"
                            class="w-4 h-4 text-blue-600 rounded border-gray-400/40 focus:ring-blue-500 group-hover:border-blue-600">
                    </div>
                @endif

            @endforeach
        </div>
    </fieldset>

    <x-mm-error for="{{ $attributes['id'] }}" />

</div>
