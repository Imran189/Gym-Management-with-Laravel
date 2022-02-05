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
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Category</th>
                                    <th>Started From</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($trainer as $item)
                                <tr>
                                    <td>{{$item->GID}}</td>
                                    <td><img src="{{ asset($item->img) }}" width="60" height="70"></td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->category}}</td>
                                    <td>{{$item->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{route('edit.trainer',$item->id)}}" class="btn btn-info  mb-2" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('delete.trainer',$item->id)}}" class="btn btn-info  mb-2" title="Delete Data"><i class="fa fa-trash"></i></a>
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

                <form action="{{route('store.trainer')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Trainer Personal Info</h4>


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
                            <label for="email1" class="col-sm-3 text-end control-label col-form-label">Category</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="category" id="email1" placeholder="Category Here">
                            </div>
                            @error('category')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Facebook Link</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="fblink" id="cono1" placeholder="Facebook Link Here">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Trainers Photo</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="img" id="cono1" onchange="imageShow(this)">
                                <img src="{{asset('upload/upload.png')}}" width="100" height="100" id="image">
                            </div>
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


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