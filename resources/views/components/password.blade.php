 <div class="relative mt-3 outline focus-within:border-none" x-data="{ show: false }">
     <x-mm-input :id="$id" :name="$name ?? 'Wachtwoord'" :placeholder="$placeholder ?? 'Wachtwoord'"
         autocomplete="current-password" required />
     <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5 text-gray2-300 ">
         <span class="cursor-pointer" :class="{'block':!show, 'hidden':show }" @click="show = !show"> <i
                 class="far fa-eye"></i></span>
         <span class="cursor-pointer" :class="{'block':show, 'hidden':!show }" @click="show = !show">
             <i class="far fa-eye-slash"></i></span>
     </div>
     <x-mm-label for="{{ $id }}">{{ __('Wachtwoord') }}</x-mm-label>

 </div>
