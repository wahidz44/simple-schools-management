@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="container">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Update Course</h4>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('courses.update', $course->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mt-3">
                                    <label for="title" class="col-md-4">Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" value="{{ $course->title }}" placeholder="title" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="starting_date" class="col-md-4">starting_date</label>
                                    <div class="col-md-8">
                                        <input type="date" name="starting_date" value="{{ $course->starting_date }}" placeholder="starting_date" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="ending_date" class="col-md-4">ending_date</label>
                                    <div class="col-md-8">
                                        <input type="date" name="ending_date" value="{{ $course->ending_date }}"  placeholder="ending_date" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="fee" class="col-md-4">Fee</label>
                                    <div class="col-md-8">
                                        <input type="number" name="fee" value="{{ $course->fee }}" placeholder="fee" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="short_description" class="col-md-4">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" class="form-control">{{ $course->short_description }}</textarea>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="long_description" class="col-md-4">Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control">{{ $course->long_description }}</textarea>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="image" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image"  class="form-control">
                                        @if(isset($course->image))
                                            <img src="{{ asset($course->image) }}" alt="" style="width: 80px; height: 80px">
                                        @endif
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="image" class="col-md-4">Course Sub Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="sub_image[]" multiple  class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="button" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update Course" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
