@extends('master')

@section('content')
    <div class="row g-5 align-items-center">
        <div class="col-lg-6 py-6 pb-0 pt-lg-0">
            <h3 class="text-primary mb-3">I'm</h3>
            <h1 class="display-3 mb-3">Bagus Panji</h1>
            <h2 class="typed-text-output d-inline">Potential Successful People, Who Make Their Parents Proud\
            </h2>
            <div class="typed-text d-none"></div>
            <div class="d-flex align-items-center pt-5">
                <a href="" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                <button type="button" class="btn-play" data-bs-toggle="modal"
                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
                <h5 class="ms-4 mb-0 d-none d-sm-block"></h5>
            </div>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid" src="img/1.png" alt="">
        </div>
    </div>
@endsection
