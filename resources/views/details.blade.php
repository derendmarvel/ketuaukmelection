@extends('layout.template')

@section('title', 'Candidate Profile')

@section('content')
    <div class = "row start-div px-2 pb-4">
        <div class = "position-fixed top-0 start-0 p-4" style = "width:100px" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
            <a href="/"><img src="/images/Back Button.png" alt="Back Icon" style = "width:60px"> </a>
        </div>
        <div class = "col-5" data-aos="fade-right" data-aos-duration="2000">
            <img src="/images/Candidate Background.png" alt="Background" class = "w-100" height = "570px">
            <div>
                <img src="{{ $candidate->photo }}" class="exceed-image-3" alt="Calon">
            </div>
        </div>
        <div class = "col-7 mt-5 px-4" data-aos="fade-left" data-aos-duration="2000">
            <h1 class = "heading-2 fw-bold text-white mb-4" > {{ $candidate->names }} </h1>
            <form action="{{ route('candidate.vote', $candidate->id ) }} " method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <button type="submit" class="btn btn-success shadow w-100 py-2 rounded-3 fw-bold"> VOTE </button>
                </form>
            </div>
    </div>

@endsection