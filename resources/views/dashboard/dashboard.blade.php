<x-app-layout>
    <x-slot name="header">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-start">
            <a href="{{ route('dashboard') }}" class="fs-4">
                {{ __('Dashboard') }}
            </a>
        </div>
        @if (session('status'))
        <div class="d-flex justify-content-end">
            <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" style="z-index: 999;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg>
                <strong>Success!</strong> {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
      </div>
    </section>
    </x-slot>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="mb-5">
                <a href="{{url('/dashboard/create')}}">
                    <div class="mt-1 p-4 text-center text-muted" style="border: 2.5px dashed; border-radius:10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 30px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        <div class="">
                            <p class="">Create New Event</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="my-5">
                <h1 class="text-center text-muted fw-bold">Your Event</h1>
            </div>
            <div class="row portfolio-container" data-aos="zoom-in" data-aos-delay="200">
            @foreach($events as $event)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 align-items-stretch portfolio-item {{$event->category}}">
                    <form action="/dashboard/detail/{{$event->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-link text-decoration-none text-dark">
                            <div class="icon-box">
                                @if(($event->img)===null)
                                <img src="/assets/img/about-img.svg" class="rounded-3" alt="">
                                @else
                                <img src="/storage/images/{{$event->img}}" class="rounded-3" alt="/assets/img/about-img.svg">
                                @endif
                                <h4 class="title mt-2 text-break" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$event->title}}">{{$event->title}}</h4>
                                <p class="description">
                                <i class="bi bi-bookmark-fill"> {{$event->category}}</i><br>
                                <i class="bi bi-stopwatch"> {{\Carbon\Carbon::parse($event->time)->format('h:i A')}}</i><br>
                                <i class="bi bi-calendar-event"> {{\Carbon\Carbon::parse($event->date)->format('l, j F Y')}}</i><br>
                                <i class="bi bi-geo-alt-fill"> {{$event->platform}}</i>
                                </p>
                                <hr class="mb-2">
                                <p class="text-gray-600 text-end">{{$event->created_at->diffForHumans()}}</p>
                            </div>
                        </button>
                    </form>
                </div>
            @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
