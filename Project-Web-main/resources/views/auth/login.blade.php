<x-guest-layout>
    <div class="content mt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/assets/img/about-img.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Log In</h3>
                                <p class="mb-4">Enter your email and password to enter.</p>
                            </div>
                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                            @endif
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" name="remember" />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                                <button class="btn btn-block  mt-5">Log In</button>
                            </form>
                            <div class="text-center mt-5 text-lg fs-4">
                                @if (Route::has('register'))
                                <p class="text-gray-600">Don't have an account? <a href="{{route('register')}}" class="font-bold">Sign
                                        up</a>.</p>
                                @endif
                                @if (Route::has('password.request'))
                                <p><a class="font-bold" href="{{route('password.request')}}">Forgot password?</a>.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>