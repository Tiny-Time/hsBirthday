<div>
    <h3 class="mt-4 font-bold text-center md:text-2xl">{{ count($guestbooks) }} People wrote to us:</h3>
    <div class="w-full max-w-4xl mx-auto mt-4 splide">
        <div class="splide__track">
            <div class="splide__list">
                @foreach ($guestbooks as $guestbook)
                    <div
                        class="flex flex-col items-center w-full max-w-sm gap-2 px-5 py-3 mx-auto bg-white rounded-lg splide__slide">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-16 h-16 text-gray-400">
                            <path fill-rule="evenodd"
                                d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97-1.94.284-3.916.455-5.922.505a.39.39 0 00-.266.112L8.78 21.53A.75.75 0 017.5 21v-3.955a48.842 48.842 0 01-2.652-.316c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97z"
                                clip-rule="evenodd" />
                        </svg>
                        <h3 class="text-3xl font-parisienne text-[#32214d]">{{ $guestbook->name }}</h3>
                        <p class="text-center text-gray-500 line-clamp-6">{{ $guestbook->message }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('livewire:init', function() {
            // Initialize Splide on page load
            initSplide();

            // Listen for Livewire morph.updated event and update the Splide slider
            Livewire.hook('morph.updated', ({
                el,
                component
            }) => {
                initSplide();
            })
        });

        function initSplide() {

            const splideElem = new Splide('.splide', {
                perPage: 3,
                breakpoints: {
                    640: {
                        perPage: 1,
                    },
                },
                gap: '1em',
            });

            splideElem.mount();

            splideElem.refresh();
        }
    </script>
</div>
