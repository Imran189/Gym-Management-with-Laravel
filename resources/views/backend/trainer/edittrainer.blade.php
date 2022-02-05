@extends('backend.adminmaster')

@section('title')
B-Cells Fitness Gym
@endsection

@section('admin')

<div class="container-fluid">
    <div class="row">


        <div class="col-2">

        </div>


        <div class="col-6">
            <div class="card">

                <form action="{{route('update.trainer',$trainer->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Trainer Personal Info</h4>


                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$trainer->name}}" id="fname" placeholder="Full Name Here">
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="phone" id="phone" value="{{$trainer->phone}}" placeholder="Contact  Number Here">
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" value="{{$trainer->email}}" id="email" placeholder="Email Here">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Category</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="category" id="email1" value="{{$trainer->category}}" placeholder="Category Here">
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Facebook Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="fblink" id="cono1" value="{{$trainer->fblink}}" placeholder="Facebook Link Here">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" value="{{$trainer-> description }}" id="textarea">
                                {{$trainer-> description }}
                                </textarea>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Trainers Old Photo</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($trainer->img) }}" width="60" height="70">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Trainers New Photo</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="img" id="cono1" onchange="imageShow(this)">
                                <img src="{{asset('upload/upload.png')}}" width="100" height="100" id="image">

                            </div>

                        </div>


                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection