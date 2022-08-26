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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>NID</th>
                                    <th>Image</th>
                                    <th>Role</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->userDetail->phone}}</td>
                                    <td>{{$user->userDetail->nid}}</td>
                                    <td>
                                        <img src="{{ asset($user->userDetail->image) }}" alt="" style="height: 80px; width: 80px;">
                                    </td>
                                    <td>
                                       {{ $user->access_label == 0 ? 'Student' : ''}}
                                       {{ $user->access_label == 1 ? 'Teacher' : ''}}
                                       {{ $user->access_label == 2 ? 'Admin' : ''}}
                                    </td>
                                    <td>{{$user->userDetail->address}}</td>
                                    <td>{{$user->userDetail->status == 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>
                                        <a href="{{ route('users.change-status',['id'=>$user->id]) }}" class="btn btn-secondary">Status</a>
                                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('users.destroy',$user->id) }}" method="post" onsubmit="return confirm('Are You Sure?')" style="display: inline-block">
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
