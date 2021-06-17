<x-app-layout>
    <x-slot name="header">
    <div class="flex">
            <a href="{{ route('dashboard') }}" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </a>
        </div>
    </x-slot>

    <div class="">
        <div class="container mx-auto py-10 sm:px-6 lg:px-8">
                <x-jet-welcome />
        </div>
    </div>
</x-app-layout>
