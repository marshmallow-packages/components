@props(['required' => null, 'width' => 'full', 'value' => null, 'autofocus' => null, 'options'])

<div class="relative w-full">

    <x-mm-label :required="$required" for="{{ $attributes['id'] }}">
        {{ $attributes['placeholder'] ?? ' ' }}
    </x-mm-label>

    <fieldset class="grid grid-cols-6 gap-6" wire:model.defer="{{ $attributes['name'] }}">

        @foreach ($options as $value => $option)
            @if ($value !== '' && !is_null($value))
                <div class="col-span-6 sm:col-span-3">
                    <legend class="sr-only">
                        {{ $option }}
                    </legend>
                    <div class="space-y-4">

                        <label
                            class="relative block px-6 py-4 bg-white border rounded-lg shadow-sm cursor-pointer border-gray-400/40 hover:border-blue-500 sm:flex sm:justify-between focus:outline-none">
                            <input type="radio" id="option-{{ $value }}" name="{{ $attributes['name'] }}"
                                value="{{ $value }}" aria-labelledby="server-size-2-label"
                                aria-describedby="server-size-2-description-0 server-size-2-description-1">
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <p id="server-size-2-label" class="font-medium text-gray-800">
                                        {{ $option }}
                                    </p>
                                    <div id="server-size-1-description-0" class="text-gray-500">
                                        <p class="sm:inline"> {{ $option }}</p>
                                    </div>
                                </div>
                            </div>

                        </label>
                    </div>
                </div>
            @endif

        @endforeach
    </fieldset>

    <x-mm-error for="{{ $attributes['id'] }}" />

</div>
