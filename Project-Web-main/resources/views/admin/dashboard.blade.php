<x-app-layout>
    <x-slot name="header">
    <div class="flex">
            <a href="{{ route('admin') }}" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('admin') }}
            </a>
        </div>
    </x-slot>

    <div class="">
Admin
    </div>
</x-app-layout>
