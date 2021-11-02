@props(['for'])

@error($for)
    <span {{ $attributes->merge(['class' => 'mt-2 text-sm text-red-600']) }}><i class="mr-1 fas fa-times-circle"></i>
        {{ $message }}</span>
@enderror
