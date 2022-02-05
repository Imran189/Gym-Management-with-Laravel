@extends('backend.adminmaster')

@section('title')
B-Cells Fitness Gym
@endsection

@section('admin')

<div class="container-fluid">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-6">
            <div class="card">

                <form action="{{route('update.student',$std->id)}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Personal Info Update</h4>


                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$std->name}}" id="fname" placeholder="Full Name Here">
                            </div>
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="phone" value="{{$std->phone}}" id="phone" placeholder="Contact  Number Here">
                            </div>
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" value="{{$std->email}}" id="email" placeholder="Email Here">
                            </div>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Gender</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="gender" value="{{$std->gander}}" id="email1" placeholder="Gender Here">
                            </div>
                            @error('gender')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Age</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="age" value="{{$std->age}}" id="cono1" placeholder="Age Here">
                            </div>
                            @error('age')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Plan Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="plan" value="{{$std->Plan}}" id="email1" placeholder="Plan Name Here">
                            </div>
                            @error('plan')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label>Validity To
                                <small class="text-muted">dd/mm/yyyy</small></label>
                            <input type="text" class="form-control " name="validity" value="{{$std->validity}}" placeholder="Enter Date">
                        </div>
                        @error('validity')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection