@extends('backend.adminmaster')
@section('admin')

@section('title')
B-Cells Fitness Gym
@endsection

<div class="container-fluid">
    <div class="row">


        <div class="col-12">



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
                                @if(date('d-m-Y', strtotime($currentDate)) < date('d-m-Y', strtotime($item->validity)) )

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

                                    @endif
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-4"></div>
    </div>
</div>


@endsection