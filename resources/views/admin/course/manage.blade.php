@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('message'))
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    @endif
                    <div>
                        <table class="table table-responsive table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>title</th>
                                <th>starting_date</th>
                                <th>ending_date</th>
                                <th>fee</th>
                                <th>image</th>
                                <th>short_description</th>
                                <th>long_description</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->starting_date }}</td>
                                    <td>{{ $course->ending_date }}</td>
                                    <td>{{ $course->fee }}</td>
                                    <td>
                                        <img src="{{ $course->image }}" alt="" style="width: 100px; height: 80px">
                                    </td>
                                    <td>{{ $course->short_description }}</td>
                                    <td>{{ $course->long_description }}</td>
                                    <td>{{ $course->status == 1? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('courses.change-status',['id'=>$course->id]) }}" class="btn btn-secondary">Status</a>
                                        <a href="{{ route('courses.edit',$course->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('courses.destroy',$course->id) }}" method="post" onsubmit="return confirm('Are You Sure?')" style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
