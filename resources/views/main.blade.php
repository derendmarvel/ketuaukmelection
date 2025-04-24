@extends('layout.template')

@section('title', 'Vote for Your Head of UKM')

@section('content')
    <div class="row padding-main pb-4">
        <h1 class="heading fw-bold text-white no-gap" data-aos="fade-up" data-aos-duration="2000">VOTE FOR THE HEAD</h1>
        <h4 class="fw-medium text-white mb-4" data-aos="fade-up" data-aos-duration="2000">of {{ $ukm }} 2025/2026</h4>

        @foreach ($candidates as $index => $candidate)
            <div class="col-md-6 d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="{{ 500 * $index }}">
                <div class="rounded-5" style="width:450px">
                    <div class="gradient rounded-5 m-4 position-relative">
                        <img src="{{ $candidate->photo }}" class="exceed-image-2" alt="Candidate {{ $index + 1 }}">
                        <span class="position-absolute top-0 {{ $index % 2 === 0 ? 'start-100' : 'start-0' }} translate-middle bg-white orange-text rounded-pill fs-1 fw-bold shadow" style="width:60px;">
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
            </div>
        @endforeach
    </div>
@endsection
