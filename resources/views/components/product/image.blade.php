<div class="flex flex-col mt-3">
    <div class="w-full h-auto aspect-w-1 aspect-h-1">
        @php
            $images = $product->product_images;
        @endphp
        @foreach ($images as $key => $image)
            <div role="tabpanel" tabindex="{{ $key }}" x-show="activeId == {{ $key }}" x-cloak
                x-transition.opacity class="outline-none group ring-0" aria-controls="product-{{ $key }}">


                @if ($image->hasGeneratedConversion('webp'))
                    <img x-on:touchstart="swipeStart" x-on:touchend="swipeEnd" src="{{ $image->getFullUrl('webp') }}"
                        x-on:click="Livewire.emit('openBlackModal', 'modals.gallery', {{ json_encode(['image_ids' => $images->pluck('id'), 'image_id' => $key]) }})"
                        alt="{{ $image->name }}"
                        class="relative object-cover object-center w-full h-full border rounded-lg product-image"
                        width="700" height="500">
                @else
                    <img x-on:touchstart="swipeStart" x-on:touchend="swipeEnd" src="{{ $image->getFullUrl() }}"
                        x-on:click="Livewire.emit('openBlackModal', 'modals.gallery', {{ json_encode(['image_ids' => $images->pluck('id'), 'image_id' => $key]) }})"
                        alt="{{ $image->name }}"
                        class="relative object-cover object-center w-full h-full border rounded-lg product-image"
                        width="700" height="500">
                @endif

                @if ($image->getCustomProperty('title'))
                    <div
                        class="absolute inset-x-0 bottom-0 hidden py-2 bg-white bg-opacity-75 border border-t-0 rounded-b-lg group-hover:block">
                        <p class="mx-auto font-sans font-bold text-center lastDot-primary-500">
                            {{ $image->getCustomProperty('title') }}</p>
                        <p class="mx-auto text-sm text-center">
                            {{ $image->getCustomProperty('description') }}
                        </p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <div class="flex flex-col w-full mt-4">
        <div @keydown.right="next" @keydown.left="prev" tabindex="0" role="region"
            aria-labelledby="carousel-label" class="relative flex space-x-2 outline-none ring-0">

            <ul x-ref="slider" tabindex="0" role="listbox" aria-labelledby="carousel-content-label"
                class="flex w-full space-x-1 overflow-x-scroll outline-none snap-x snap-mandatory ring-0"
                aria-input-field-name="product_image">

                @foreach ($product->product_images as $key => $image)
                    <li class="relative w-auto h-auto px-1 py-2 snap-start " role="option">

                        <button
                            class="relative flex flex-col items-center justify-center w-24 h-24 p-2 rounded-md focus:ring-2 ring-0 focus:ring-primary-500 focus:outline-none focus:ring-opacity-50 "
                            type="button" x-on:click="setActive({{ $key }})" x-bind="focusableWhenVisible">

                            <span class="sr-only">
                                {{ $image->name }}
                            </span>
                            <span class="absolute inset-0 overflow-hidden border rounded-md">
                                {{ $image->img()->attributes(['class' => 'object-cover object-center w-full h-full']) }}
                            </span>

                            <span x-show="activeId == {{ $key }}"
                                class="absolute inset-0 rounded-md pointer-events-none ring-primary-500 ring-2 ring-offset-1"
                                aria-hidden="true"></span>
                        </button>
                    </li>
                @endforeach

            </ul>

            <button x-on:click="prev" x-show="imageCount > 4 && !atMin"
                class="absolute inset-y-0 !ml-0 left-0 text-4xl bg-white bg-opacity-60 text-primary-500 px-1 hover:text-white hover:bg-primary-500 focus:outline-none hover:bg-opacity-60"
                x-transition>
                <span aria-hidden="true">❮</span>
                <span class="sr-only">Skip to previous slide</span>
            </button>


            <button x-on:click="next" x-show="imageCount > 4 && !atMax"
                class="absolute inset-y-0 right-0 px-1 text-4xl bg-white text-primary-500 bg-opacity-60 hover:text-white hover:bg-primary-500 hover:bg-opacity-60 "
                x-transition>
                <span aria-hidden="true">❯</span>
                <span class="sr-only">Skip to next slide</span>
            </button>

        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            skip: 1,
            activeId: 0,
            atMax: false,
            atMin: true,
            touchstartX: 0,
            touchendX: 0,
            imgModal: false,
            imgModalSrc: '',
            imgModalDesc: '',
            next() {
                if (this.activeId < this.maxId) {
                    this.setActive(this.activeId + 1);
                }
                this.to((current, offset) => current + (offset * this.skip));
            },
            prev() {
                if (this.activeId > this.minId) {
                    this.setActive(this.activeId - 1);
                }
                this.to((current, offset) => current - (offset * this.skip))
            },
            to(strategy) {
                let slider = this.$refs.slider;
                let current = slider.scrollLeft;
                let offset = slider.firstElementChild.getBoundingClientRect().width;
                slider.scrollTo({
                    left: strategy(current, offset),
                    behavior: 'smooth'
                })
            },
            focusableWhenVisible: {
                'x-intersect:enter'() {
                    this.$el.removeAttribute('tabindex')
                },
                'x-intersect:leave'() {
                    this.$el.setAttribute('tabindex', '-1')
                },
            },
            setActive(activeId) {
                if (activeId == this.minId) {
                    this.atMin = true;
                } else {
                    this.atMin = false;
                }
                if (activeId == this.maxId) {
                    this.atMax = true;
                } else {
                    this.atMax = false;
                }
                this.activeId = activeId;
            },
            swipeStart(event) {
                this.touchstartX = event.changedTouches[0].screenX;
            },
            swipeEnd(event) {
                this.touchendX = event.changedTouches[0].screenX;
                this.handleGesture();
            },
            handleGesture() {
                if (this.touchendX !== this.touchstartX) {
                    if (this.touchendX > this.touchstartX) {
                        this.prev();
                    }

                    if (this.touchendX < this.touchstartX) {
                        this.next();
                    }
                }
            },
            setModal(imgModalSrc, imgModalDesc) {
                this.imgModal = true;
                this.imgModalSrc = imgModalSrc;
                this.imgModalDesc = imgModalDesc;
            },
            imageCount: {{ count($product->product_images) }},
            maxId: {{ count($product->product_images) }} - 1,
            minId: 0,
        }))

    })
</script>
