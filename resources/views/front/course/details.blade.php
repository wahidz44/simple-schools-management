@extends('front.master')

@section('body')
    <section class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($course->image) }}" alt="" class="w-100" style="height: 400px;">
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h3>{{ $course->title }}</h3>
                        <p>{{ $course->fee }}</p>
                        <p>
                            <span>Starting Date: {{ $course->starting_date }} |</span>
                            <span>Ending Date: {{ $course->ending_date }}</span>
                        </p>
                        <p>{{ $course->short_description }}</p>
                        <form action="{{ route('course-enroll') }}" method="post">
                           @csrf
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            <input type="submit" {{ $hasEnroll == true ? 'disabled' : '' }} class="btn btn btn-primary" value="Enroll">
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div>
                        {!! $course->long_description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
