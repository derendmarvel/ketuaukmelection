@extends('layout.template')

@section('title', 'Vote for Your Head of UKM')

@section('content')
    <div class="row padding-main pb-4">
        <a href="{{ route('ukmList') }}" class="position-fixed top-0 start-0 p-2 m-3 btn btn-outline-light d-flex align-items-center gap-2 fs-5" 
            style="z-index: 1050; width: auto;"> <i class="fas fa-arrow-left"></i> Back </a>
        <h1 class="heading fw-bold text-white no-gap" data-aos="fade-up" data-aos-duration="2000" data-aos-delay='200'>VOTE FOR THE HEAD</h1>
        <h4 class="fw-medium text-white mb-4" data-aos="fade-up" data-aos-duration="2000" data-aos-delay='400'>of {{ $ukm }} 2025/2026</h4>

        <div class="d-flex flex-wrap justify-content-center gap-4 py-4 py-md-0">
            @php
                $candidateCount = count($candidates);
                $desktopWidth = $candidateCount == 2 ? '40%' : '30%';
            @endphp

            @foreach ($candidates as $index => $candidate)
                <!-- <div class="rounded-5 candidate-card {{ $candidateCount == 2 ? 'candidate-2' : 'candidate-3' }} mb-5"> -->
                <div class="rounded-5 candidate-card {{ $candidateCount == 2 ? 'candidate-2' : 'candidate-3' }} mb-5"
                data-aos="fade-up" data-aos-duration="2000" data-aos-delay="{{ 400 + ($index * 200)}}">
                    <div class="gradient rounded-5 m-2 position-relative">
                        <img src="{{ $candidate->photo }}" class="exceed-image-2 rounded-5" alt="Candidate {{ $index + 1 }}">
                        <!-- <span class="position-absolute top-0 start-0 translate-middle bg-white orange-text rounded-pill fs-1 fw-bold shadow" style="width: 60px;">
                            {{ $index + 1 }}
                        </span> -->
                    </div>

                    <div class="ontop-image px-3 text-center">
                        <h4 class="fw-bold text-white text-shadow">{{ $candidate->names }}</h4>
                        <form action="{{ route('candidate.vote', $candidate->id) }}" method="POST" onsubmit="return confirmation(this);">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-danger orange-div w-50 rounded-5 fw-bold">VOTE</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
