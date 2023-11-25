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
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Parisienne&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/rose.png') }}" type="image/x-icon">
</head>

<body class="px-4 py-5 antialiased text-white font-lato" x-data="{ openCreateRSVPModal: false, openShareModal: false }">
    <h1 class="text-3xl text-center md:text-6xl font-parisienne">Uzair & Ambreen's 1st Anniversary</h1>
    <h3 class="mt-2 font-bold text-center md:text-2xl">Cheers to One Year: A Year of Love, Laughter, and Forever
        Memories. <br> Celebrating Our 1st Wedding Anniversary!</h3>

    <!-- Event Timer Component -->
    <div class="flex flex-wrap justify-center gap-2 mt-5 toz-timer font-parisienne">
        <!-- Days -->
        <div class="relative flex items-center justify-center w-32 h-40 toz-ec-d">
            <svg class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" width="200" height="190">
                <circle cx="100" cy="90" r="75" />
                <circle cx="100" cy="90" r="75" id="toz-day" />
            </svg>
            <div class="toz-days">
                <span class="text-4xl" id="toz-days">365</span><span class="text-xl toz-unit">d</span>
            </div>
        </div>

        <!-- Hours -->
        <div class="relative flex items-center justify-center w-32 h-40 toz-ec-d">
            <svg class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" width="200" height="190">
                <circle cx="100" cy="90" r="75" />
                <circle cx="100" cy="90" r="75" id="toz-hr" />
            </svg>
            <div class="toz-hours">
                <span class="text-4xl" id="toz-hours">24</span><span class="text-xl toz-unit">h</span>
            </div>
        </div>

        <!-- Minutes -->
        <div class="relative flex items-center justify-center w-32 h-40 toz-ec-d">
            <svg class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" width="200" height="190">
                <circle cx="100" cy="90" r="75" />
                <circle cx="100" cy="90" r="75" id="toz-mn" />
            </svg>
            <div class="toz-mins">
                <span class="text-4xl" id="toz-mins">60</span><span class="text-xl toz-unit">m</span>
            </div>
        </div>

        <!-- Seconds -->
        <div class="relative flex items-center justify-center w-32 h-40 toz-ec-d">
            <svg class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" width="200" height="190">
                <circle cx="100" cy="90" r="75" />
                <circle cx="100" cy="90" r="75" id="toz-es" />
            </svg>
            <div class="toz-secs">
                <span class="text-4xl" id="toz-secs">60</span><span class="text-xl toz-unit">s</span>
            </div>
        </div>
    </div>

    <!-- RSVP -->
    <div class="flex justify-center gap-2 mt-4">
        <button type="button" @click="$store.openCreateRSVPModal.toggle()" class="px-4 py-2 uppercase bg-white rounded-3xl text-sm text-[#32214d] font-bold">rsvp</button>
        <button type="button" @click="$store.openShareModal.toggle()" class="bg-white p-2 rounded-full text-[#32214d]">
            <span class="sr-only">Share</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M15.75 4.5a3 3 0 11.825 2.066l-8.421 4.679a3.002 3.002 0 010 1.51l8.421 4.679a3 3 0 11-.729 1.31l-8.421-4.678a3 3 0 110-4.132l8.421-4.679a3 3 0 01-.096-.755z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!-- Line -->
    <svg xmlns="http://www.w3.org/2000/svg" class="w-full max-w-sm mx-auto mt-4" height="12" viewBox="0 0 690 12"
        fill="none">
        <path
            d="M0.163249 6C0.163249 8.94552 2.55106 11.3333 5.49658 11.3333C8.4421 11.3333 10.8299 8.94552 10.8299 6C10.8299 3.05448 8.4421 0.666667 5.49658 0.666667C2.55106 0.666667 0.163249 3.05448 0.163249 6ZM679.17 6C679.17 8.94552 681.558 11.3333 684.503 11.3333C687.449 11.3333 689.837 8.94552 689.837 6C689.837 3.05448 687.449 0.666667 684.503 0.666667C681.558 0.666667 679.17 3.05448 679.17 6ZM5.49658 7H684.503V5H5.49658V7Z"
            fill="white" />
    </svg>

    <!-- Guestbook -->
    <h2 class="mt-4 text-5xl text-center font-parisienne">Guestbook</h2>
    <h3 class="mt-2 font-bold text-center md:text-2xl">Leave your wishes, comments and thoughts on this page!
    </h3>


    <!-- Guestbook: Form -->
    <form action="#" method="post" class="mt-4">

        <!-- Guestbook: Form - Row -->
        <div class="flex flex-col max-w-4xl gap-3 mx-auto md:flex-row">
            <!-- Guestbook: Form - Input - Name -->
            <div class="relative flex flex-col w-full">
                <!-- Guestbook: Form - Input - Label -->
                <label for="name"
                    class="ml-4 text-xs bg-white rounded-t-xl w-max px-2 text-[#32214d] py-[2px] font-semibold -mb-1">Name
                    <span class="text-red-500">*</span></label>
                <!-- Guestbook: Form - Input - Name -->
                <input type="text" name="name" id="name" placeholder="Enter your name here..."
                    class="text-[#32214d] border-none rounded-xl focus:outline-none focus:ring-0" required>
                <!-- Guestbook: Form - Input - Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="absolute w-5 h-5 text-[#32214d] top-[45.333333%] md:top-1/3 right-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </div>

            <!-- Guestbook: Form - Input - Email -->
            <div class="relative flex flex-col w-full">
                <!-- Guestbook: Form - Input - Label -->
                <label for="email"
                    class="ml-4 text-xs bg-white rounded-t-xl w-max px-2 text-[#32214d] py-[2px] font-semibold -mb-1">Email
                    <span class="text-red-500">*</span></label>
                <!-- Guestbook: Form - Input - Email -->
                <input type="email" name="email" id="email" placeholder="Enter your email here..."
                    class="text-[#32214d] border-none rounded-xl focus:outline-none focus:ring-0" required>
                <p class="text-sm font-semibold">Your email address will not be published.</p>
                <!-- Guestbook: Form - Input - Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="absolute w-5 h-5 text-[#32214d] top-1/3 right-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
            </div>
        </div>

        <!-- Guestbook: Form - Input - Textarea -->
        <div class="relative flex flex-col w-full max-w-4xl mx-auto mt-3">
            <!-- Guestbook: Form - Input - Label -->
            <label for="message"
                class="ml-4 text-xs bg-white rounded-t-xl w-max px-2 text-[#32214d] py-[2px] font-semibold -mb-1">Message
                <span class="text-red-500">*</span></label>
            <!-- Guestbook: Form - Input - Textarea -->
            <textarea name="message" id="message" placeholder="Enter your message here..." cols="30" rows="10"
                class="text-[#32214d] border-none rounded-xl focus:outline-none focus:ring-0" required></textarea>
            <!-- Guestbook: Form - Input - Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="absolute w-5 h-5 text-[#32214d] top-6 right-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
        </div>

        <!-- Guestbook: Form - Submit button -->
        <div class="w-full max-w-4xl mx-auto mt-5 text-end">
            <button type="submit" class="px-4 py-2 uppercase bg-white rounded-3xl text-sm text-[#32214d] font-bold">Submit</button>
        </div>
    </form>

    <!-- Guestbook Notes -->
    <h3 class="mt-4 font-bold text-center md:text-2xl">20 People wrote to us:</h3>
    <div class="w-full max-w-4xl mx-auto mt-4 splide">
        <div class="splide__track">
            <div class="splide__list">
                @for ($i = 0; $i < 5; $i++)
                    <div class="flex flex-col items-center w-full max-w-sm gap-2 px-5 py-3 mx-auto bg-white rounded-lg splide__slide">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-16 h-16 text-gray-400">
                            <path fill-rule="evenodd"
                                d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97-1.94.284-3.916.455-5.922.505a.39.39 0 00-.266.112L8.78 21.53A.75.75 0 017.5 21v-3.955a48.842 48.842 0 01-2.652-.316c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97z"
                                clip-rule="evenodd" />
                        </svg>
                        <h3 class="text-3xl font-parisienne text-[#32214d]">James</h3>
                        <p class="text-center text-gray-500 line-clamp-4">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Vitae magni id numquam, debitis repellat, necessitatibus maiores similique libero ex magnam
                            dolores, est eum explicabo. Magnam quos, fugit placeat iusto velit modi nulla ut similique,
                            voluptates doloremque officia pariatur esse minus sint voluptatibus illum repudiandae veniam dolores
                            praesentium a eos necessitatibus libero fuga dolorum? Expedita commodi ullam assumenda libero,
                            molestias eligendi nulla saepe vel ipsa porro ducimus ex, voluptatibus alias illo culpa deleniti
                            delectus magnam dolorum similique sint, temporibus dicta et quasi consequuntur! Distinctio earum
                            doloribus, deleniti atque perspiciatis sit, excepturi at eius dolor hic dignissimos, placeat sunt
                            delectus error minus.</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Guestbook Notes -->
    <div class="mt-8 text-center md:text-end">
        <a href="https://tinyti.me/"
            class="text-sm font-semibold text-gray-200 md:text-lg hover:text-green-300">Powered by TinyTi.me</a>
    </div>

    <!-- Modals -->
    @include('modals.share')
    @include('modals.create-rsvp')

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
            .then(() => {
            })
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
</body>

</html>
