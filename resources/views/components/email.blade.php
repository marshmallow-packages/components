<div class="relative pb-2 mt-3 outline focus-within:border-none">
    <x-mm-input :id="$id" :name="$name ?? 'E-mailadres'" :placeholder="$placeholder ?? 'E-mailadres'"
        autocomplete="email" required />

    <x-mm-label for="{{ $id }}">{{ __('E-mailadres') }}</x-mm-label>

</div>
