<li>

    <a
        {{ $attributes->merge(['class' => 'text-sm font-medium cursor-pointer hover:text-primary-500 group transition']) }}>
        <i
            class="mr-2.5 transition duration-200 ease-out transform group-hover:translate-x-1 fa-xs fa-regular fa-chevron-right"></i>
        <span class="font-normal">
            {{ $slot }}
        </span>
    </a>
</li>
