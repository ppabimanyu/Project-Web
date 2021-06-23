<x-app-layout>
<x-slot name="header">
        <div class="flex">
            <a href="{{ route('dashboard') }}" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mx-1">
                {{ __('/') }}
            </h2>
            <a href="" class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail') }}
            </a>
        </div>
    </x-slot>

    <div class="container mx-auto">
        <div class="md:grid md:grid-rows-3 md:grid-cols-3 gap-4 md:py-0">
            <div class="w-full block h-full p-5 bg-white col-span-2 row-span-3 shadow-lg hover:shadow-xl rounded-2xl mb-2 md:mb-0">
                <img alt="blog photo" src="/assets/img/about-img.svg" class="h-full w-full object-cover"/>
            </div>
            <div class="w-full block h-full p-5 bg-white col-span-1 row-span-1 shadow-lg hover:shadow-xl rounded-2xl p-8 mb-2 md:mb-0">
                <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                    Event Information
                </p>
                <hr><br>
                <div class="font-light text-md flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                    </svg>
                    <p class="text-gray-600 ml-2">{{$event->category}}</p>
                </div>
                <div class="font-light text-md flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600 ml-2">{{$event->time}} - {{$event->date}}</p>
                </div>
                <div class="font-light text-md flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600 ml-2">{{$event->platform}}</p>
                </div>
            </div>
            <div class="w-full block h-full p-5 bg-white col-span-1 row-span-2 shadow-lg hover:shadow-xl rounded-2xl mb-2 md:mb-0">
                <div class="bg-white dark:bg-gray-800 w-full p-4">
                    <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                        {{$event->title}}
                    </p>
                    <hr><br>
                    <p class="text-gray-600 font-light text-md overflow-auto mb-5">
                        {{$event->description}}
                    </p>
                    <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">Link <a href="" class="">{{$event->link}}</a></p>                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
