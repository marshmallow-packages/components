<div class="px-3 mt-1" :field="$field">
    <ul>
        @foreach ($component->messages($errors) as $error)
            <li class="text-red-600"><i class="mr-1 fas fa-times-circle"></i>{{ $error }}</li>
        @endforeach
    </ul>
</div>
