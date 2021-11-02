<a
    {{ $attributes->merge(['class' => 'inline-flex items-center px-8 py-2 font-semibold tracking-widest text-yellow-500 uppercase align-middle transition duration-500 ease-in-out transform border-2 border-transparent border-yellow-500 cursor-pointer pointer-events-auto hover:bg-yellow-500 hover:text-black-500 active:bg-yellow-500 focus:outline-none focus:border-yellow-500 focus:ring focus:ring-yellow-300 disabled:opacity-25 group group-hover:cursor-pointer hover:cursor-pointer']) }}>
    <span
        class="  group-hover:cursor-pointer cursor-pointer hover:cursor-pointer mx-auto self-center align-middle mt-[2px]">
        {{ $slot }}
    </span>
</a>
