@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="row">
            <div class="container">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Update Profile</h4>
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
                            <form action="{{route('update-profile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="name" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ auth()->user()->name }}" placeholder="User Name" class="form-control">
                                        <span class="text-danger mt-2">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="email" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" name="email" value="{{ auth()->user()->email }}" placeholder="User Email" class="form-control">
                                        <span class="text-danger mt2">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="phone" class="col-md-4">Phone</label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" value="{{ auth()->user()->userDetail->phone }}" placeholder="User phone" class="form-control">
                                        <span class="text-danger mt2">{{$errors->has('phone') ? $errors->first('phone') : ''}}</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="nid" class="col-md-4">NID</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nid" value="{{ auth()->user()->userDetail->nid }}" placeholder="User nid" class="form-control">
                                        <span class="text-danger mt2">{{$errors->has('nid') ? $errors->first('nid') : ''}}</span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="address" class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                       <textarea name="address" class="form-control">{{ auth()->user()->userDetail->address }}</textarea>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="nid" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" placeholder="User nid" class="form-control">
                                        @if(isset(auth()->user()->userDetail->image))
                                            <img src="{{ auth()->user()->userDetail->image }}" alt="" style="height: 90px; width: 90px;">
                                        @endif
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
