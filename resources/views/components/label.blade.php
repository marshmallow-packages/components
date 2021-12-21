@props(['required' => null, 'value'])

<label {{ $attributes->merge(['class' => 'block w-full mb-1 ml-px font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
    @if ($required)
        <span class="font-semibold text-red-500">*</span>
    @endif
</label>
