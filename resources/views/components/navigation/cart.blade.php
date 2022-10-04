<div x-data="{ cartOpen: false }" x-on:click.outside="cartOpen = false" x-on:close.stop="cartOpen = false"
    x-on:mouseover.away.debounce="cartOpen = false" x-on:mouseover.enter.debounce.100ms="cartOpen = true" class="block ">

    <div x-on:click="cartOpen = ! cartOpen"
        class="px-4 py-2 mx-auto font-sans text-sm font-bold text-center text-gray-700 uppercase cursor-pointer md:py-3 hover:text-primary-500 hover:bg-primary-50"
        :class="{ 'text-gray-700 ': !cartOpen, 'bg-primary-50 text-primary-500': cartOpen }">
        <i class="fa-solid fa-cart-shopping"></i>
    </div>


    <div x-show="cartOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute z-[80] py-4 left-0 sm:left-[inherit] md:right-0 shadow-xl w-full px-2 gap-x-4 lg:max-w-1/3 mx-auto sm:px-4 md:px-4 bg-white"
        x-cloak>

        <livewire:cart.navigation-cart />
    </div>

</div>
