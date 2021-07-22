<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1 class="text-light"><a href="/"><span>LiveIn</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown me-1">
                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bi bi-envelope bi-sub fs-4'></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Mail</h6>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">No new mail</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown me-3">
                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bi bi-bell bi-sub fs-4'></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Notifications</h6>
                        </li>
                        <li>
                            <a class="dropdown-item">No notification available</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3 mt-4">
                                <h6 class="mb-0 text-gray-600 fs-5">{{ Auth::user()->name }}</h6>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="{{ Auth::user()->profile_photo_url }}" width="50px" height="50px" alt="" class="rounded-circle object-fit-cover h-16 w-16">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header fs-5">Hello, {{ strtok(Auth::user()->name, " ") }}!</h6>
                        </li>
                        <li>
                            @if(auth()->user()->role === 'admin')
                            <a class="dropdown-item" href="{{ url('/admin') }}">
                                @else
                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                    @endif
                                    <i class="icon-mid bi bi-person me-2 fs-5"></i>
                                    Dashboard
                                </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.show') }}">
                                <i class="icon-mid bi bi-person me-2 fs-5"></i>
                                My Profile
                            </a>
                        </li>
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="icon-mid bi bi-gear me-2 fs-5"></i>
                                {{ __('API Tokens') }}
                            </a>
                        </li>
                        @endif
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->