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
                {{ __('Edit') }}
            </a>
        </div>
    </x-slot>

    <div class="">
        <div class="container mx-auto md:p-6 p-4 bg-white shadow sm:rounded-2xl">               
            <div class="md:grid md:grid-cols-6 md:gap-4 px-8">
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <form action="/update/{{$event->id}}" method="post" class="sm:overflow-hidden" enctype="multipart/form-data">
                    @csrf
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="title" class="block text-md font-medium text-gray-700">Title</label>
                                    <input type="text" id="title" name="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-md rounded-md border-gray-300 @error('title') border-red-500 @enderror" placeholder="Title" value="{{ $event->title}}">
                                    @error('title')
                                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="category" class="block text-md font-medium text-gray-700">Category</label>
                                    <select id="category" name="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-md @error('category') border-red-500 @enderror">
                                        <option value="Seminar" selected>Seminar</option>
                                        <option value="Kesehatan">Kesehatan</option>
                                        <option value="Gaming">Gaming</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('category')
                                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-3 sm:col-span-1">
                                    <label for="time" class="block text-md font-medium text-gray-700">Time</label>
                                    <input type="time" id="time" name="time" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-md border-gray-300 rounded-md @error('time') border-red-500 @enderror" placeholder="hh:mm" value="{{ $event->time }}">
                                    @error('time')
                                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="date" class="block text-md font-medium text-gray-700">Date</label>
                                    <input type="date" data-date-format="YYYY MMMM DD" id="date" name="date" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-md border-gray-300 rounded-md @error('date') border-red-500 @enderror" placeholder="yyyy-mm-dd" value="{{ $event->date }}">
                                    @error('date')
                                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-1">
                                    <label for="platform" class="block text-md font-medium text-gray-700">Platform</label>
                                    <input type="text" id="platform" autocomplete="given-name" name="platform" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-md border-gray-300 rounded-md @error('platform') border-red-500 @enderror" placeholder="Zoom" value="{{ $event->platform }}">
                                    @error('platform')
                                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="link" class="block text-md font-medium text-gray-700">
                                        Link
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-md">
                                            http://
                                        </span>
                                        <input type="text" id="link" name="link" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-md border-gray-300 @error('link') border-red-500 @enderror" placeholder="www.example.com" value="{{ $event->link }}">
                                    </div>
                                    @error('link')
                                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="about" class="block text-md font-medium text-gray-700">
                                    Description
                                </label>
                                <div class="mt-1">
                                    <textarea id="about" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-md border border-gray-300 rounded-md @error('description') border-red-500 @enderror" placeholder="Description">{{ $event->description }}</textarea>
                                </div>
                                @error('description')
                                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="flex text-md font-medium text-gray-700">
                                    Cover photo  <p class="text-red-600 font-bold">  Coming Soon!</p>
                                </label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-md text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <input id="file-upload" type="file" name="img" class="not-sr-only">
                                        </label>
                                    </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 10MB
                                        </p>
                                    </div>
                                </div>
                                @error('img')
                                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-md font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                            </button>
                        </div>
                    </form>
                </div>
                <div class="md:col-span-3 invisible md:visible">
                    <img class="w-full rounded-full" src="/assets/img/design-decisions.png" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
