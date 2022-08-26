@extends('front.master')
@section('body')
    <section>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/') }}font/img/1.png" class="d-block w-100 " alt="..." style="height: 300px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/') }}font/img/2.png" class="d-block w-100 " alt="..." style="height: 300px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/') }}font/img/3.jpg" class="d-block w-100 " alt="..." style="height: 300px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/') }}font/img/1.png" class="d-block w-100 " alt="..." style="height: 300px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

{{--Courses Print Start--}}

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">All Courses</h2>
                    <div class="row mt-3">
                        @foreach($courses as $course)
                        <div class="col-md-4">
                            <a href="{{ route('course-details',['id'=>$course->id]) }}" class="text-dark nav-link">
                                <div class="card">
                                    <img src="{{ asset($course->image) }}" alt="" class="card-img-top" style="height: 250px">
                                    <div class="card-body">
                                        <h4>{{ $course->title }}</h4>
                                        <p>Fee: {{ $course->fee }}</p>
                                        <span>Starting from: {{ $course->starting_date }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
