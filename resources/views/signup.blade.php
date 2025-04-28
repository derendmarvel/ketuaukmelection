@extends('layout.template')

@section('title', "Sign In")

@section('content')
    <!-- Sign in with Google -->
    <div class = "col w-100 h-100 justify-content-center align-middle">
        <div class = "row" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <h1 class = "heading-3 fw-bold text-white"> SIGN-IN TO VOTE </h1>
        </div>
        <a href = " {{ route('auth.google') }}" class = "col d-flex signin-btn bg-white rounded-4 py-2 mx-auto link-underline link-underline-opacity-0 justify-content-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
            <div class = "row">
                <img src = "/images/Google-Icon.png" class = "google-icon mx-2">
            </div>
            <div class = "row ">
                <p class = "fs-5 fw-bold orange-text py-0 lh-0 my-0"> SIGN-IN WITH GOOGLE </p>
            </div>
        </a>
        <div class = "row my-3" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="900"> @error('email')
            <div class = "col">
                <div class = "fs-5 text-danger-emphasis" role="alert">
                    <strong> {{ $message }} </strong>
                </div>
            </div>
            @enderror
        </div>
    </div>
    <!-- <div class="card w-100 h-100 px-5 py-3 rounded-4" data-aos="fade-up" data-aos-duration="2000">   
        <div class="card-body">
            <h1 class = "heading-2 fw-bold"> SIGN IN </h1>
                <form method="POST" action="/registration">
                @method('post')
                @csrf
                <div class="row mb-3">
                    <label for="email" class = "my-2">{{ __('UC Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="nim" class="my-2">{{ __('NIM') }}</label>
                    <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" required>

                    @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mb-3 mt-4">
                    <button type="submit" class="btn btn-danger orange-div fw-bold">
                        {{ __('SIGN IN') }}
                    </button>
                </div>
            </form>
        </div>
    </div> -->
@endsection