@props(['required' => null, 'width' => 'full', 'value' => null, 'autofocus' => null, 'options'])

<div class="relative w-full">

    <x-mm-label :required="$required" for="{{ $attributes['id'] }}">
        {{ $attributes['placeholder'] ?? ' ' }}
    </x-mm-label>

    <select
        class="border-[#d3d6e0] w-full text-base focus:border-orange-300 focus:placeholder-gray-600 py-2.5 placeholder-[#d3d6e0] focus:ring-0  rounded shadow-sm"
        wire:model.defer="{{ $attributes['name'] }}">

        <option class="text-[#d3d6e0]" selected hidden>
            {{ __('Maak een keuze') }}
        </option>

        @foreach ($options as $value => $option)
            @if ($value !== '' && !is_null($value))
                <option value="{{ $value }}">
                    {{ $option }}
                </option>
            @endif

        @endforeach
    </select>


    <x-mm-error for="{{ $attributes['id'] }}" />

</div>
