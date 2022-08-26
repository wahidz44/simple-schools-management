@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="container">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Update User</h4>
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
                            <form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mt-3">
                                    <label for="name" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $user->name }}" placeholder="User Name" class="form-control">
                                        <span class="text-danger mt-2">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="email" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" name="email" value="{{ $user->email }}" placeholder="User Email" class="form-control">
                                        <span class="text-danger mt2">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="password" class="col-md-4">Role</label>
                                    <div class="col-md-8">
                                        <select name="access_label" id="" class="form-control">
                                            <option value="2" {{ $user->access_label == 2 ? 'selected' : '' }}>Super Admin</option>
                                            <option value="1" {{ $user->access_label == 1 ? 'selected' : '' }}>Teacher</option>
                                            <option value="0" {{ $user->access_label == 0 ? 'selected' : '' }}>Student</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="button" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Update User" class="btn btn-success">
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
