<x-app-layout>
    <x-slot name="header">
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex align-items-center fs-4">
                    <a href="{{ route('/') }}" class="fs-4 me-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                    </a>
                    <a href="{{ route('dashboard') }}">
                        {{ __('Dashboard') }}
                    </a>
                    <a href="">
                        {{ __('/') }}
                    </a>
                    <a href="">
                        {{ __('Detail') }}
                    </a>
                </div>
            </div>
        </section>
    </x-slot>


    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <a href="/profile/{{$event->id_user}}">
                        <div class="d-flex p-3 m-2 rounded-pill position-absolute text-white countdown" data-count="{{$event->date}}" style="background-color:rgba(37, 37, 37, 0.219);">
                            <h4>%d : %h : %m : %s</h4>
                        </div>
                    </a>
                    @if(($event->img)===null)
                    <img src="/assets/img/about-img.svg" alt="">
                    @else
                    <img src="/storage/images/{{$event->img}}" alt="">
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-action overflow-auto mb-4">
                        <h3 class="text-break fw-bold border-bottom pb-3">Action</h3>
                        <div class="d-flex">
                            <a href="{{url('/dashboard/detail/'.$event->id.'/edit')}}" class="btn btn-primary me-2 p-3 rounded-3">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{url('/destroy/'.$event->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger p-3 rounded-3">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>Event information</h3>
                        <i class="bi bi-bookmark-fill"> {{$event->category}}</i>
                        <i class="bi bi-stopwatch"> {{\Carbon\Carbon::parse($event->time)->format('h:i A')}}</i>
                        <i class="bi bi-calendar-event"> {{\Carbon\Carbon::parse($event->date)->format('l, j F Y')}}</i>
                        <i class="bi bi-geo-alt-fill"> {{$event->platform}}</i>
                        <i class="bi bi-link"> <a href="{{$event->link}}">{{$event->link}}</a></i>
                    </div>
                </div>
                <div class="portfolio-description">
                    <h2 class="text-break">{{$event->title}}</h2>
                    <p>
                        <?= htmlspecialchars_decode($event->description); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="container mx-auto">
        <div class="md:grid md:grid-rows-4 md:grid-cols-3 gap-4 md:py-0">
            <div class="w-full block h-full p-5 bg-white col-span-2 row-span-3 shadow-lg hover:shadow-xl rounded-2xl mb-2 md:mb-0">
                @if(($event->img)===null)
                    <img alt="blog photo" src="/assets/img/about-img.svg" class="h-full w-full object-cover"/>
                @else
                    <img alt="blog photo" src="/storage/images/{{$event->img}}" class="h-full w-full object-cover"/>
                @endif
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
                    <p class="text-gray-600 ml-2">{{\Carbon\Carbon::parse($event->time)->format('h:i A')}}</p>
                </div>
                <div class="font-light text-md flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600 ml-2">{{\Carbon\Carbon::parse($event->date)->format('l, j F Y')}}</p>
                </div>
                <div class="font-light text-md flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600 ml-2">{{$event->platform}}</p>
                </div>
                <div class="font-light text-md flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <p class="text-gray-600 ml-2">{{$event->link}}</p>
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
                <div class="flex justify-end p-2">
                    <a href="/dashboard/detail/{{$event->id}}/edit" class="h-10 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-md font-medium rounded-xl text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 m-2">
                        Edit
                    </a>
                    <form action="/destroy/{{$event->id}}" method="post">
                    @method('delete')
                    @csrf
                        <button type="submit" class="h-10 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-md font-medium rounded-xl text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 m-2">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>