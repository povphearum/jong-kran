@extends('admin.home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Continent</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">Continent</li>
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
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>

                    @endif
                    <div class="card-header">
                        <h3 class="card-title">All Continent</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($continents as $continent)
                                <tr>
                                    <td>{{$continent->id}}</td>
                                    <td>{{$continent->name}}</td>
                                    <td><a href="{{route('edit-continent',$continent->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('edit-continent',$continent->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
