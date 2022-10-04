<div class="" x-data="{ open: false }" x-on:click.outside="open = false" x-on:close.stop="open = false"
    x-on:mouseover.away.debounce="open = false" x-on:mouseover.enter.debounce.100ms="open = true">

    <div x-on:click="open = ! open"
        class="block px-4 py-3 mx-auto text-sm font-bold text-center text-gray-700 uppercase cursor-pointer md:px-2 xl:px-3 2xl:px-4 group hover:text-primary-500 hover:bg-primary-50 group-hover:text-primary-500">
        {{ $trigger }}
        <i class="ml-2 fas" :class="{ ' fa-chevron-down': !open, ' fa-chevron-up': open }"></i>
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute z-[60]  left-0 shadow-xl  w-full px-2 mx-auto gap-x-4 md:max-w-4xl lg:max-w-7xl xl:max-w-screen-xl 2xl:max-w-screen-2xl sm:px-4 md:px-8 mr-2  bg-white"
        x-cloak>
        <div class="grid gap-2 w-[98%] grid-cols-3 pt-6 pb-8">
            {{ $content }}
        </div>
    </div>
</div>
