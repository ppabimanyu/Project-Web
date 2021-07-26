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
                        {{ __('Create') }}
                    </a>
                </div>
            </div>
        </section>
    </x-slot>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="/store" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="title" class="form-label fs-5">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                        @error('title')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="inputState" class="form-label fs-5">Category</label>
                        <select id="inputState" class="form-select @error('category') is-invalid @enderror" name="category">
                            <option value="Seminar" selected>Seminar</option>
                            <option value="Health">Kesehatan</option>
                            <option value="Game">Gaming</option>
                            <option value="Education">Education</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('category')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="time" class="form-label fs-5">Time</label>
                        <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time">
                        @error('time')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-8">
                        <label for="date" class="form-label fs-5">Date</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
                        @error('date')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="platform" class="form-label fs-5">Platform</label>
                        <input type="text" class="form-control @error('platform') is-invalid @enderror" id="platform" name="platform">
                        @error('platform')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label class="form-label fs-5" for="link">Link</label>
                        <div class="input-group">
                            <div class="input-group-text">http://</div>
                            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link">
                        </div>
                        @error('link')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-5" for="description">Description</label>
                        <textarea id="editor" class="form-control @error('description') is-invalid @enderror" id="description" rows="6" name="description"></textarea>
                        @error('description')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group mb-3 text-center mx-auto">
                        <label for="" class="form-label fs-5">Cover Photo</label>
                        <div class="col-12 mt-1 p-4 text-center text-muted" style="border: 2.5px dashed; border-radius:5px;">
                            <input type="file" class="text-center mx-auto" name="img">
                            <p class="text-muted">
                                PNG, JPG, GIF up to 10MB
                            </p>
                        </div>
                        @error('img')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-none d-md-block d-lg-block">
                <img class="mt-5" width="600px" src="/assets/img/design-decisions.png" alt="">
            </div>
        </div>
    </div>
</x-app-layout>