@extends('layout.template')

@section('title', 'Voting Results')

@section('content')
    <div class = "row start-div px-2 py-8">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="position-fixed top-0 start-0 p-2 m-3 btn btn-outline-light d-flex align-items-center gap-2" 
            style="z-index: 1050; width: auto;"> <i class="fas fa-arrow-left"></i> Back </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
            
        <a href="{{ route('attendanceList') }}" class="position-fixed top-0 end-0 p-2 m-3 btn btn-outline-light d-flex align-items-center text-start gap-2" 
            style="z-index: 1050; width: auto;"> Attendance List <i class="fas fa-arrow-right"></i> </a>

        <div class = "col-5 ontop center-div d-flex justify-content-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"> 
            <div class="rounded-5 ms-5" style="width:485px">
                <div class = "gradient rounded-5 m-4">
                    <img src="{{ $candidate_1->photo }}" class="exceed-image-4" alt="Calon 1">
                </div>
            </div>
        </div>
        <!-- <div class = "col-2 h-100">
            <div class="progress h-25 percentage-1" style = "width:400px" role="progressbar" aria-label="Success example" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="500">
                <div class="progress-bar bg-success text-white fw-bold fs-1" style="width: 53%"> 53%</div>
            </div>
        </div>  -->
        <div class = "col-2 h-100">
            <h1 class = "heading center-div fw-bold text-white text-center mt-3" data-aos="fade-up" data-aos-duration="1000"> VOTING RESULTS </h1>
            <div class = "p-container">
                @php
                    $condition = $candidate_1->number_of_votes > $candidate_2->number_of_votes;
                    $tie = $candidate_1->number_of_votes == $candidate_2->number_of_votes
                @endphp
                <div class = "p-bar {{ $tie ? 'orange-bar shadow' : ( $condition ? 'green-bar' : 'red-bar' ) }} text-center">
                    <p class="p-text text-white fw-bold fs-1 my-0 py-0"> {{ $percentage_1 }}% </p>
                    <p class="p-text text-white my-0 py-0"> {{ $candidate_1->number_of_votes }} votes </p>
                </div>
            </div>
            <div class = "p-container-2">
                <div class = "p-bar-2 {{ $tie ? 'orange-bar shadow' : ( $condition ? 'red-bar' : 'green-bar' ) }} text-center">
                    <p class="p-text text-white fw-bold fs-1 my-0 py-0"> {{ $percentage_2 }}% </p>
                    <p class="p-text text-white my-0 py-0"> {{ $candidate_2->number_of_votes}} votes </p>
                </div>
            </div>
        </div>

        <div class = "col-5 ontop center-div" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"> 
            <div class="rounded-5 me-5" style="width:485px">
                <div class = "gradient rounded-5 m-4">
                    <img src="{{ $candidate_2->photo }}" class="exceed-image-4" alt="Calon 1">
                </div>
            </div>
        </div>
    </div>
@endsection