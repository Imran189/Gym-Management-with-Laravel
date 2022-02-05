@extends('backend.adminmaster')

@section('title')
B-Cells Fitness Gym
@endsection

@section('admin')

<div class="container-fluid">
    <div class="row">


        <div class="col-8">

            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>{{session()->get('message')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admitted Student</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>GID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Plan Name</th>
                                    <th>Validity</th>
                                    <th></th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($std as $item)
                                <tr>
                                    <td>{{$item->GID}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->Plan}}</td>
                                    <td>{{$item->validity}}</td>
                                    <td>
                                        <a href="{{route('edit.student',$item->id)}}" class="btn btn-info  mx-2" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="card">

                <form action="{{route('store.student')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Personal Info</h4>


                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="fname" placeholder="Full Name Here">
                            </div>
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact  Number Here">
                            </div>
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Here">
                            </div>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Gender</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="gender" id="email1" placeholder="Gender Here">
                            </div>
                            @error('gender')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Age</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="age" id="cono1" placeholder="Age Here">
                            </div>
                            @error('age')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Plan Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="plan" id="email1" placeholder="Plan Name Here">
                            </div>
                            @error('plan')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label>Validity To
                                <small class="text-muted">dd/mm/yyyy</small></label>
                            <input type="text" class="form-control date-inputmask" name="validity" id="date-mask" placeholder="Enter Date">
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