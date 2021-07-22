<x-guest-layout>
<div class="content">   
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/assets/img/about-img.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h1 class="auth-title">Forgot Password</h1>
                        <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p>

                        <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                            <div class="form-group position-relative mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email">
                                <!-- <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                </div> -->
                            </div>
                            <button class="btn btn-block  mt-5">Send Password Reset Link</button>
                        </form>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class='text-gray-600'>Remember your account? <a href="{{ route('login')}}" class="font-bold">Log
                                    in</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
</x-guest-layout>
