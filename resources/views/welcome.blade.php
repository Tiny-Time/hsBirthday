<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tinyti.me') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @filamentStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/cake.png') }}" type="image/x-icon">

    {{-- Google Recaptcha --}}
    {!! NoCaptcha::renderJs() !!}

    {{-- TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/3i5otce98dquqhd5qvejwcfh6qrn125fnncjwgnu59l9ku2n/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<body class="px-4 py-5 antialiased text-[#10253A] font-lato" x-data="{ openCreateRSVPModal: false, openShareModal: false }">
    <h1 class="text-4xl font-bold text-center md:text-5xl font-amaticSC">Hayyan & Sanaan's Birthday</h1>
    <h2 class="mt-2 text-center text-white md:text-xl">
        Join the countdown to a mesmerizing birthday extravaganza. <br>Every
        tick of the clock brings us closer to moments that'll leave you
        breathless!
    </h2>

    <!-- Event Timer Component -->
    <div class="mt-4 toz-timer">
        <!-- Days -->
        <div class="toz-ecd">
            <div class="toz-ec-d">
                <img src="{{ Vite::asset('resources/images/timer_icon.svg') }}" alt="svg icon" />
                <span id="toz-days">365</span>
            </div>
            <span class="toz-unit">days</span>
        </div>

        <!-- Hours -->
        <div class="toz-ecd">
            <div class="toz-ec-d">
                <img src="{{ Vite::asset('resources/images/timer_icon.svg') }}" alt="svg icon" />
                <span id="toz-hours">24</span>
            </div>
            <span class="toz-unit">hours</span>
        </div>

        <!-- Minutes -->

        <div class="toz-ecd">
            <div class="toz-ec-d">
                <img src="{{ Vite::asset('resources/images/timer_icon.svg') }}" alt="svg icon" />
                <span id="toz-mins">16</span>
            </div>
            <span class="toz-unit">mins</span>
        </div>

        <!-- Seconds -->

        <div class="toz-ecd">
            <div class="toz-ec-d">
                <img src="{{ Vite::asset('resources/images/timer_icon.svg') }}" alt="svg icon" />
                <span id="toz-secs">60</span>
            </div>
            <span class="toz-unit">secs</span>
        </div>
    </div>

    <!-- RSVP -->
    <div class="flex justify-center gap-2 mt-4">
        <button type="button" @click="$store.openCreateRSVPModal.toggle()"
            class="px-4 py-2 uppercase bg-[#a6ce96] border-[#32214d] border-2 rounded-3xl text-sm text-[#32214d] font-bold">rsvp</button>
        <button type="button" @click="$store.openShareModal.toggle()" class="bg-[#a6ce96] border-[#32214d] border-2 p-2 rounded-full text-[#32214d]">
            <span class="sr-only">Share</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M15.75 4.5a3 3 0 11.825 2.066l-8.421 4.679a3.002 3.002 0 010 1.51l8.421 4.679a3 3 0 11-.729 1.31l-8.421-4.678a3 3 0 110-4.132l8.421-4.679a3 3 0 01-.096-.755z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!-- Line -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-full max-w-sm mx-auto mt-4 fill-[#32214d]" height="12" viewBox="0 0 690 12"
        fill="fillCurrent">
        <path
            d="M0.163249 6C0.163249 8.94552 2.55106 11.3333 5.49658 11.3333C8.4421 11.3333 10.8299 8.94552 10.8299 6C10.8299 3.05448 8.4421 0.666667 5.49658 0.666667C2.55106 0.666667 0.163249 3.05448 0.163249 6ZM679.17 6C679.17 8.94552 681.558 11.3333 684.503 11.3333C687.449 11.3333 689.837 8.94552 689.837 6C689.837 3.05448 687.449 0.666667 684.503 0.666667C681.558 0.666667 679.17 3.05448 679.17 6ZM5.49658 7H684.503V5H5.49658V7Z"
            fill="fillCurrent" />
    </svg>

    <!-- Guestbook -->
    <h2 class="mt-4 text-5xl font-bold text-center font-amaticSC">Guestbook</h2>
    <h3 class="mt-2 text-center text-white md:text-2xl">Leave your wishes, comments, and thoughts below
    </h3>


    <!-- Guestbook: Form -->
    @livewire('guestbook')

    <!-- Guestbook Notes -->
    @livewire('guestbook-list')

    <!-- Guestbook Notes -->
    <div class="mt-10 text-center md:text-end">
        <a href="https://tinyti.me/" class="text-sm font-semibold text-gray-200 md:text-lg hover:text-green-300">Powered
            by TinyTi.me</a>
    </div>

    <!-- Modals -->
    @include('modals.share')
    @include('modals.create-rsvp')
    @livewire('notifications')

    <!-- Script -->

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.store("openCreateRSVPModal", {
                on: false,

                toggle() {
                    this.on = !this.on;
                },
            });

            Alpine.store("openShareModal", {
                on: false,

                toggle() {
                    this.on = !this.on;
                },
            });

            window.Alpine.magic('clipboard', () => subject => {
                if (typeof navigator !== 'undefined' && navigator.clipboard) {
                    navigator.clipboard.writeText(subject)
                        .then(() => {})
                        .catch(error => {
                            console.error('Error copying to clipboard:', error);
                        });
                } else {
                    const input = document.getElementById('shareUrl');
                    input.select();

                    try {
                        document.execCommand('copy');
                    } catch (error) {
                        console.error(error);
                    }
                }
            });
        });
    </script>

    @stack('js')
    @filamentScripts
</body>

</html>
