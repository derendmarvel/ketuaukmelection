@extends('layout.template')

@section('title', "Login")

@section('content')
    <div class="card w-100 h-100 px-5 py-3 rounded-4" data-aos="fade-up" data-aos-duration="2000">
        <div class="card-body">
            <h1 class = "heading-2 fw-bold"> LOGIN </h1>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <label for="email" class = "my-2">{{ __('UC Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="password" class="my-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror mb-3" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row my-3">
                    <button type="submit" class="btn btn-danger orange-div">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
