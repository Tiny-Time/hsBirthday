<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-center text-4xl font-semibold leading-tight text-gray-800 font-amaticSC dark:text-gray-200">
            {{ __('Guestbook') }}
            <img src="{{ Vite::asset('resources/images/cake.png') }}" alt="Guestbook" class="w-12">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @livewire('admin.guestbook-list')
        </div>
    </div>
</x-app-layout>
