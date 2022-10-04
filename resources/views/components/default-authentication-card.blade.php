<div class="flex min-h-screen">
    <div class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="w-full max-w-sm mx-auto lg:w-96">
            {{ $left }}
        </div>
    </div>
    <div class="relative flex-1 hidden w-0 lg:block">
        @isset($right)
            {{ $right }}
        @else
            <img class="absolute inset-0 object-cover object-right w-full h-full"
                src="https://pbs.twimg.com/media/ELG2NN8X0AAB2Vh.jpg:large" alt="">
        @endisset
    </div>
</div>
