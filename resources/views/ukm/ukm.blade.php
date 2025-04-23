@extends('layout.template')

@section('title', 'UKM Election')

@section('content')
    <div class = "row padding-main pb-4">
        <h1 class = "heading fw-bold text-white no-gap" data-aos="fade-up" data-aos-duration="2000"> VOTE UKM PRESIDENT </h1>
        <h4 class = "fw-medium text-white mb-4" data-aos="fade-up" data-aos-duration="2000"> for 2025/2026 </h4>
        
            <div class = "col-5 center-div mt-3" data-aos="fade-right" data-aos-duration="2500" data-aos-delay="500"> 
                <div class="rounded-5 ms-5" style="width:450px">
                    <div class = "gradient rounded-5 m-4 position-relative">
                        <img src="{{ $candidate_1->photo }}" class="exceed-image-2" alt="Calon 1">
                        <span class="position-absolute top-0 start-100 translate-middle bg-white orange-text rounded-pill fs-1 fw-bold shadow" style = "width:60px;"> 1 </span>
                    </div>
                    <div class = "ontop-image px-3">
                        <h4 class="fw-bold text-white text-shadow"> {{$candidate_1->names}} </h4>
                        <form action="{{ route('candidate.vote', $candidate_1->id ) }} " method="POST" onsubmit = "return confirmation(this);">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-danger orange-div w-50 rounded-5 fw-bold"> VOTE </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class = "col-2 center-div mx-0" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="500"> 
                <h1 class = "heading fw-bold text-white"> OR </h1>
            </div>
        
            <div class = "col-5 center-div mt-3" data-aos="fade-left" data-aos-duration="2500" data-aos-delay="1000">
                <div class="rounded-5 me-5" style="width:450px">
                    <div class = "gradient rounded-5 m-4 position-relative">
                        <img src="{{ $candidate_2->photo }}" class="exceed-image-2" alt="Calon 2">
                        <span class="position-absolute top-0 start-0 translate-middle bg-white orange-text rounded-pill fs-1 fw-bold shadow" style = "width:60px;"> 2 </span>
                    </div>
                    <div class = "ontop-image px-3">
                        <h4 class="fw-bold text-white text-shadow"> {{$candidate_2->names}}  </h4>
                        <form action="{{ route('candidate.vote', $candidate_2->id ) }} " method="POST" onsubmit = "return confirmation(this);">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-danger orange-div w-50 rounded-5 fw-bold"> VOTE </button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection