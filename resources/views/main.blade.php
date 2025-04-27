@extends('layout.template')

@section('title', 'Vote for Your Head of UKM')

@section('content')
    <div class="row padding-main pb-4">
        <h1 class="heading fw-bold text-white no-gap" data-aos="fade-up" data-aos-duration="2000" data-aos-delay='200'>VOTE FOR THE HEAD</h1>
        <h4 class="fw-medium text-white mb-4" data-aos="fade-up" data-aos-duration="2000" data-aos-delay='400'>of {{ $ukm }} 2025/2026</h4>

        <div class="d-flex justify-content-center flex-wrap gap-4">
            @php
                $candidateCount = count($candidates);
                $width = $candidateCount == 2 ? '40%' : '30%';
            @endphp
            @foreach ($candidates as $index => $candidate)
                <div class="rounded-5" style="width: {{ $width }};" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="{{ 400 + ($index * 200)}}">
                    <div class="gradient rounded-5 m-4 position-relative">
                        <img src="{{ $candidate->photo }}" class="exceed-image-2" alt="Candidate {{ $index + 1 }}">
                        <span class="position-absolute top-0 start-0 translate-middle bg-white orange-text rounded-pill fs-1 fw-bold shadow" style="width: 60px;">
                            {{ $index + 1 }}
                        </span>
                    </div>
                    <div class="ontop-image px-3">
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
