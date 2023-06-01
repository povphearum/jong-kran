@extends('admin.home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.content-header -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Recipes</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id </th>
                                <th>User</th>
                                <th>email</th>
                                <th>Role</th>
                                <th>Create At</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><img src="{{ $user->profile_photo_url }}" class="img-circle" height="40" width="40"
                                         alt="{{ $user->name }}">
                                    {{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @foreach($user->user_roles as $role)
                                <td>
                                    {{$role->display_name}}
                                   </td>
                                @endforeach
                                <td>{{$user->created_at}}</td>
                                <td><a href="{{route('usershow',$user->id)}}" class="btn btn-secondary btn-sm"><i class="fa fa-info"></i></a>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

@endsection
