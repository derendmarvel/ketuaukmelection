@extends('layout.template')

@section('title', 'Voting Results')

@section('content')
    <div class = "row start-div px-2 py-5 w-100'">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="position-fixed top-0 start-0 p-2 m-3 btn btn-outline-light d-flex align-items-center gap-2" 
            style="z-index: 1050; width: auto;"> <i class="fas fa-arrow-left"></i> Back </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>

        <h1 class = "heading text-white fw-bold text-center mb-4" data-aos="fade-up" data-aos-duration="2000"> UKM Election 2025/2026 Results </h1>

        @foreach($candidates as $ukmId => $candidatesGroup)
            @php
                $ukm = $candidatesGroup->first()->ukm;
            @endphp

            <div class = 'row w-100 justify-content-center'> 
                <!-- Display the UKM name as h1 -->
                <div class = 'col-2 d-flex align-items-center' data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                    <div class = 'row'>
                        <img class = "w-100" src = "{{ $ukm->logo }}"> 
                        <!-- <h1 class = 'fs-1 fw-bold text-white text-center' >{{ $ukm->name }}</h1> -->
                    </div>
                </div>

                <div class = 'col-10'>
                    <div class = 'row'>
                <!-- List of candidates in the UKM -->
                        @foreach($candidatesGroup as $index => $candidate)
                        <div class = 'col-3 align-items-center justify-content-center mb-4'  data-aos="fade-up" data-aos-duration="2000" data-aos-delay="{{ 200 + ($index * 200)}}">
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="bg-white orange-text rounded-pill fw-bold px-4 py-2 fs-2">
                                        {{ $index + 1 }}
                                    </div>
                                </div>
                            </div>

                            <!-- Photo -->
                            <div class="row">
                                <div class="rounded-5">
                                    <div class="gradient rounded-4 m-4">
                                        <img src="{{ $candidate->photo }}" class="exceed-image-2" alt="Candidate {{ $index + 1 }}">
                                    </div>
                                </div>
                            </div>

                            <div class="ontop-image d-flex flex-column align-items-center text-white">
                                <p class="fw-bold fs-4 mb-2">{{ $candidate->names }}</p>
                                <div class="orange-div rounded-5 fw-bold px-3 py-2">
                                    {{ $candidate->votes_count ?? 0 }} votes
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection