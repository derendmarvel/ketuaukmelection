@extends('layout.template')

@section('title', 'Select UKM')

@section('content')
    <div class="row padding-main pb-4">
        <h1 class="heading fw-bold text-white no-gap" data-aos="fade-up" data-aos-duration="2000">
            YOUR ENROLLED UKMs
        </h1>
        <h4 class="fw-medium text-white mb-4" data-aos="fade-up" data-aos-duration="2000">
            Student Organizations You’ve Joined
        </h4>

        <div class="row justify-content-center">
            @forelse ($ukms as $ukm)
                <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card h-100 rounded-5 shadow border-0 bg-transparent" style="min-height: 250px;">
                        <div class="card-body rounded-5 d-flex flex-column justify-content-between p-4 gradient">
                            <div>
                                <h4 class="fw-bold">{{ $ukm->name }}</h4>
                                <img src = '{{ $ukm->logo}} ' style = 'height: 150px;'>
                            </div>
                            <a href="{{ route('candidateList', $ukm->id) }}" class="btn btn-warning text-dark rounded-5 fw-bold mt-3 w-100">
                                Start Voting
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center mt-5 text-white">
                    <h5>You are not enrolled in any UKM.</h5>
                </div>
            @endforelse
        </div>
    </div>
@endsection