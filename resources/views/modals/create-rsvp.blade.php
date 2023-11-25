<div class="relative z-10 text-[#32214d]" aria-labelledby="modal-title" role="dialog" aria-modal="true"
    x-show="$store.openCreateRSVPModal.on" x-cloak>
    <div class="fixed inset-0 transition-opacity bg-gray-600 bg-opacity-75" x-show="$store.openCreateRSVPModal.on"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    </div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex items-center justify-center min-h-full p-4">
            <div class="relative w-full max-w-md overflow-hidden transition-all transform bg-gray-100 rounded shadow-xl"
                x-show="$store.openCreateRSVPModal.on" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                @click.away="$store.openCreateRSVPModal.toggle()">
                <!-- Create RSVP -->
                <div class="relative w-full p-4 -mb-4 bg-gray-100 dark:bg-gray-900">
                    <h3 class="text-2xl font-bold text-center">Create RSVP</h3>
                    <div class="mt-4">
                        <!-- RSVP: Form -->
                        <form action="#" method="post" class="mt-4">

                            <!-- RSVP: Form - Input - Name -->
                            <div class="relative flex flex-col w-full">
                                <!-- RSVP: Form - Input - Label -->
                                <label for="name"
                                    class="ml-4 text-xs bg-white shadow rounded-t-xl w-max px-2 text-[#32214d] py-[2px] font-semibold -mb-1">Name
                                    <span class="text-red-500">*</span></label>
                                <!-- RSVP: Form - Input - Name -->
                                <input type="text" name="name" id="name"
                                    placeholder="Enter your name here..."
                                    class="text-[#32214d] border-none rounded-xl shadow focus:outline-none focus:ring-0"
                                    required>
                                <!-- RSVP: Form - Input - Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="absolute w-5 h-5 text-[#32214d] top-[45.333333%] right-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </div>

                            <!-- RSVP: Form - Input - Email -->
                            <div class="relative flex flex-col w-full mt-3">
                                <!-- RSVP: Form - Input - Label -->
                                <label for="email"
                                    class="ml-4 text-xs bg-white shadow rounded-t-xl w-max px-2 text-[#32214d] py-[2px] font-semibold -mb-1">Email
                                    <span class="text-red-500">*</span></label>
                                <!-- RSVP: Form - Input - Email -->
                                <input type="email" name="email" id="email"
                                    placeholder="Enter your email here..."
                                    class="text-[#32214d] border-none rounded-xl shadow focus:outline-none focus:ring-0"
                                    required>
                                <p class="mt-1 text-xs font-semibold">Your email address will not be published.
                                </p>
                                <!-- RSVP: Form - Input - Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="absolute w-5 h-5 text-[#32214d] top-1/3 right-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>

                            <!-- RSVP: Form - Submit button -->
                            <div class="w-full max-w-4xl mx-auto mt-5 text-end">
                                <button type="submit"
                                    class="px-4 py-2 uppercase bg-white shadow rounded-3xl text-sm text-[#32214d] font-bold">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <button @click="$store.openCreateRSVPModal.toggle();">
                    <span class="sr-only">close modal</span>
                    <svg class="absolute w-5 h-5 cursor-pointer right-2 top-2" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5 7.5L7.5 22.5M7.5 7.5L22.5 22.5" stroke="#000" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
