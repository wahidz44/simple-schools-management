@extends('admin.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">All Enrolled Courses</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course name</th>
                                        <th>Student Name</th>
                                        <th>Enrloll Date</th>
                                        <th>Course Fee</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($enrolls as $enroll)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $enroll->course->title }}</td>
                                        <td>{{ $enroll->user->name }}</td>
                                        <td>{{ $enroll->enroll_date }}</td>
                                        <td>{{ $enroll->course->fee }}</td>
                                        <td>{{ $enroll->payment_method == 1 ? 'Cash' : 'SSLCommers'}}</td>
                                        <td>{{ $enroll->payment_status }}</td>
                                        <td>
                                            <a href="{{ route('change-payment-status',['id'=>$enroll->id]) }}" class="btn btn-primary btn-sm">Status</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
