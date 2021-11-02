 <div class="pt-2" x-data="{isOpen : false}">
     <button @click.prevent="isOpen = true" aria-expanded="false"
         class="relative w-48 px-4 mt-2 py-3 pl-3 pr-10 font-semibold text-center bg-[#fff]  placeholder:text-gray-300
                bg-opacity-100 text-xl focus:border-green-500  cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-white focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-green-500 sm:text-sm"
         id="headlessui-listbox-button-1" type="button" aria-haspopup="true" aria-expanded="true"
         aria-controls="headlessui-listbox-options-3"><span class="block pr-2 text-xl truncate">1</span><span
             class="absolute inset-y-0 right-0 flex items-center px-2 bg-green-500 pointer-events-none">
             <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6 text-white transition duration-500 ease-in-out transform"
                 :class="{' -rotate-180 ': isOpen,' rotate-0 ': !isOpen }" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
             </svg>
         </span></button>
     <div x-show="isOpen" @click.outside="isOpen = false">
         <ul class="absolute py-1 mt-1 overflow-auto bg-[#fff] w-48 max-h-60 text-xl ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
             aria-labelledby="headlessui-listbox-button-1" id="headlessui-listbox-options-3" role="listbox"
             tabindex="0">

             <li class="relative px-3 py-2 cursor-pointer select-none group hover:bg-green-500 focus:outline-none"
                 id="headlessui-listbox-option-6" role="option" tabindex="-1">
                 <span class="block text-xl font-semibold truncate group-hover:text-white ">5</span>
             </li>
             <li class="relative px-3 py-2 cursor-pointer select-none group hover:bg-green-500 focus:outline-none"
                 id="headlessui-listbox-option-6" role="option" tabindex="-1">
                 <span class="block text-xl font-semibold truncate group-hover:text-white ">10</span>
             </li>
             <li class="relative px-3 py-2 cursor-pointer select-none group hover:bg-green-500 focus:outline-none"
                 id="headlessui-listbox-option-6" role="option" tabindex="-1">
                 <span class="block text-xl font-semibold truncate group-hover:text-white ">25</span>
             </li>
             <li class="relative px-3 py-2 cursor-pointer select-none group hover:bg-green-500 focus:outline-none"
                 id="headlessui-listbox-option-6" role="option" tabindex="-1">
                 <span class="block text-xl font-semibold truncate group-hover:text-white ">50</span>
             </li>

         </ul>
     </div>
 </div>
