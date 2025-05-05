@extends('layout.template')

@section('title', 'Select UKM')

@section('content')
    <div class="row padding-main pb-4 justify-content-center">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="position-fixed top-0 start-0 p-2 m-3 btn btn-outline-light d-flex align-items-center gap-2 fs-5" 
            style="z-index: 1050; width: auto;"> <i class="fas fa-arrow-left"></i> Log Out </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        @if($ukms->isNotEmpty())
            <h1 class="heading fw-bold text-white no-gap" data-aos="fade-up" data-aos-duration="2000">
                YOUR ENROLLED UKMs
            </h1>
            <h4 class="text-white mb-4 mt-2 fs-5" data-aos="fade-up" data-aos-duration="2000" data-aos-delay = "200">
                Student Organizations You’ve Joined
            </h4>
        @else
            <h1 class="heading fw-bold text-white no-gap" data-aos="fade-up" data-aos-duration="2000">
                YOUR ENROLLED UKMs
            </h1>
            <h4 class="text-white mb-4 mt-2 fs-5" data-aos="fade-up" data-aos-duration="2000" data-aos-delay = "200">
                No UKMs left to vote
            </h4>
        @endif

        <div class="row w-100 d-flex align-items-center justify-content-center text-center py-4 py-md-0">
            @forelse ($ukms as $ukm)
                <!-- <div class="col-md-4 col-sm-6 mb-4"> -->
                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="2000" data-aos-delay = "400">
                    <div class="card h-100 rounded-5 shadow border-0 bg-transparent" style="min-height: 250px;">
                        <div class="card-body rounded-5 d-flex flex-column justify-content-between p-4 bg-white">
                            <div>
                                <h4 class="fw-bold">{{ $ukm->name }}</h4>
                                <img src = '{{ $ukm->logo}} ' style = 'height: 150px;'>
                            </div>
                            <a href="{{ route('candidateList', $ukm->id) }}" class="btn btn-danger orange-div text-white rounded-5 fw-bold mt-3 w-100">
                                Start Voting
                            </a>
                        </div>
                    </div>
                </div>
            @empty
            <div class = "px-5 py-5 py-md-0">
                <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <a href="{{ route('logout') }}" class="btn btn-success w-50 py-3 rounded-4 shadow fw-bold" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> Finish Voting </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endforelse
        </div>
    </div>
@endsection