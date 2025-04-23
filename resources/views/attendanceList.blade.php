@extends('layout.template')

@section('title', 'Attendance List')

@section('content')
    <div class="w-100 h-100">
        <div class="container-fluid">
            <div class="row header align-items-center align-middle">
                <div class="col-12">
                    <h1 class="fw-bold countdown-font my-3 text-white"> Attendance List </h1>

                    <form action = "{{ route('voterSearch') }}" method = "GET" class = "form-inline w-100 d-flex gap-2 pt-0 pb-3"> 
                        <input class = "form-control" type = "search" name = "search" placeholder = "Search">
                        <button type = "submit" class = "btn btn-outline-light"> Search </button>
                    </form>

                    <div class="table-responsive">
                        <table class="table-bordered border-white text-white fs-5 w-100">
                            <thead>
                                <tr>
                                    <th scope="col p-2">Name</th>
                                    <th scope="col p-2">NIM</th>
                                    <th scope="col p-2">Presence</th>
                                    <th scope="col p-2">Checklist</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($voters as $key => $voter)
                                    <tr>
                                        <td class = "p-2">{{ $voter['name'] }}</td>
                                        <td class = "p-2">{{ $voter['nim'] }}</td>
                                        <td class = "p-2">{{ $voter['presence'] == 1 ? 'Yes' : 'No' }}</td>
                                        <td class="p-2">
                                            <a href="/manualCheck/{{$voter->id}}" style="text-decoration: none; filter: brightness(2);">
                                                <img src="/images/X.png" class="btn-size">
                                            </a>
                                            <a href="/uncheck/{{$voter->id}}" style="text-decoration: none; filter: grayscale(100%) brightness(12);">
                                                <img src="/images/X-1.png" class="btn-size">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    

                        <!-- Pagination Links -->
                        <div class="pagination-wrapper d-flex justify-content-end my-3">
                            {{ $voters->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                    </div>

                    <form id = "qrForm" action="{{ route('attendanceCheck') }}" method="POST" class = "mt-3">
                        @csrf
                        @method('post')
                        <!-- <label for="qr_code"> Scan QR Code: </label> -->
                        <input class = "form-control" type = "text" name = "qr_code" id="qr_code" style="display:none;">
                        <!-- <button type="submit" class = "btn btn-white">Check Attendance</button> -->
                    </form>
                </div>
            </div>
        </div>
        
        <a href="{{ route('stats') }}" 
        class="position-absolute top-0 start-0 m-3 btn btn-outline-light d-flex align-items-center gap-2" 
        style="z-index: 1050;" 
        data-aos="fade-down" 
        data-aos-duration="800">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const qrInput = document.getElementById('qr_code');

            qrInput.focus();

            let buffer = '';

            window.addEventListener('keydown', (e) => {
                if (e.key !== 'Enter') {
                    buffer += e.key;
                } else {
                    qrInput.value = buffer;
                    document.getElementById('qrForm').submit();
                    buffer = ''; // Reset the buffer
                }
            });

            document.getElementById('qrForm').addEventListener('submit', () => {
                qrInput.focus();
            });
        });
    </script>
@endsection