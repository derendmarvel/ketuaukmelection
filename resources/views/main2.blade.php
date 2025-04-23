@extends('layout.template')

@section('title', 'Student Council Election')

@section('content')
    <div class = "row padding-main">
        <h1 class = "heading fw-bold text-white no-gap"> VOTE YOUR PRESIDENT & VICE PRESIDENT </h1>
        <h5 class = "fw-medium text-white mb-5"> for Student Council 2024/2025 </h5>
        
            <div class = "col-5 center-div mt-3"> 
            <a href = "/" class = "link-underline link-underline-opacity-0"> 
                <div class="card custom-card" style="width:350px">
                    <div class = "gradient rounded-5 m-3">
                        <img src="/images/Candidates 1 Resize.png" class="exceed-image" alt="Calon 1">
                    </div>
                    <div class = "px-3 pb-4">
                        <h5 class="fw-bold orange-text my-0"> Ida Bagus Radhita </h5>
                        <p class = "fw-medium text-black my-1"> & Nathan Darell </p> 
                        <a href="#" class="btn orange-div w-50 rounded-5 fw-bold mt-1"> VOTE NOW </a>
                    </div>
                </div>
            </a>
            </div>

            <div class = "col-2 center-div mx-0"> 
                <h1 class = "heading fw-bold text-white"> OR </h1>
            </div>
        
            <div class = "col-5 center-div mt-3"> 
            <a href = "/details" class = "link-underline link-underline-opacity-0"> 
                <div class="card custom-card" style="width:350px">
                    <div class = "gradient rounded-5 m-3">
                        <img src="/images/Candidates 2 Resize.png" class="exceed-image" alt="Calon 1">
                    </div>
                    <div class = "px-3 pb-4">
                        <h5 class="fw-bold orange-text my-0"> Michael David Sin </h5>
                        <p class = "fw-normal text-black my-1"> & Nathan Darell </p> 
                        <a href="#" class="btn orange-div w-50 rounded-5 fw-bold mt-1"> VOTE NOW </a>
                    </div>
                </div>
            </a>
            </div>
       
    </div>
@endsection