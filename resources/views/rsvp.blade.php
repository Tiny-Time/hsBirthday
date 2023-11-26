<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-center gap-2 text-3xl font-semibold leading-tight text-gray-800 font-parisienne dark:text-gray-200">
            {{ __('RSVP') }}
            <img src="{{ Vite::asset('resources/images/rose.png') }}" alt="RSVP" class="w-8">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @livewire('admin.rsvp-list')
        </div>
    </div>
</x-app-layout>
