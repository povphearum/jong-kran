@extends('admin.home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <p class="m-0">Category |<a class="text-gray"> Update Category</a></p>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                <div class="card card-success">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Update Information</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route('editcate')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$category->id}}" name="id">
                            <label for="name">Category Name:</label>                        <br>
                            <input class="form-control" type="text" id="name" name="name" placeholder="{{$category->name}}">
                            <br>
                            <label for="display_name">Display Name:</label>                        <br>
                            <input class="form-control" type="text" id="display_name" name="display_name" placeholder="{{$category->display_name}}">
                            <br>

                            <div class="justify-content-end">
                                <button type="submit" class="btn btn-success justify-content-end">Update</button>
                            </div>
                        </form>
                    </div>

                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
