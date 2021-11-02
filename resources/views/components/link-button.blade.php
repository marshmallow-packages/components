<a
    {{ $attributes->merge(['href' => '', 'class' => 'inline-flex items-center px-8 py-2 font-semibold ease-in-out tracking-widest uppercase align-middle transition duration-500  transform bg-yellow-500 border border-transparent text-black-500 hover:bg-yellow-700 hover:text-white-500 active:bg-yellow-900  focus:outline-none focus:border-yellow-900 focus:ring focus:ring-yellow-300 disabled:opacity-25 group group-hover:cursor-pointer cursor-pointer hover:cursor-pointer pointer-events-auto']) }}>
    <span
        class="text-center mx-auto group-hover:cursor-pointer cursor-pointer hover:cursor-pointer self-center align-middle mt-[2px]">{{ $slot }}</span>
</a>
