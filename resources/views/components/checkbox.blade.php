@props(['state' => null, 'required' => null, 'width' => 'full', 'value' => null, 'autofocus' => null, 'options', 'question'])

<div class="relative w-full">

    <x-mm-tooltip-label :required="$required" for="{{ $attributes['id'] }}" :placeholder="$attributes['placeholder']" :question="$question" />

    <fieldset class="mt-2 space-y-3">
        @foreach ($options as $value => $option)
            @if ($value !== '' && !is_null($value))
                <div class="flex items-center ml-2 group">
                    <input id="{{ $attributes['name'] }}.{{ $value }}" type="checkbox"
                        wire:model="{{ $attributes['name'] }}.{{ $value }}"
                        name="{{ $attributes['name'] }}.{{ $value }}" value="{{ $value }}"
                        class="w-4 h-4 border-gray-300 rounded border-gray-400/40 peer text-primary-500 focus:ring-primary-500/30 group-hover:border-primary-600" />
                    <label for="{{ $attributes['name'] }}.{{ $value }}"
                        class="block ml-3 text-sm font-normal text-gray-700 cursor-pointer peer-focus:font-medium ">
                        {{ $option }}
                    </label>
                </div>
            @endif
        @endforeach
    </fieldset>

    <div class="mt-2">
        <x-mm-error for="{{ $attributes['id'] }}" />
    </div>

</div>
