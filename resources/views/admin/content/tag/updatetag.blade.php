@extends('admin.home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <p class="m-0">Tag |<a class="text-gray"> Update Tag</a></p>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tag</li>
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
                        <h3 class="card-title">Update Tag Information</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route('edittag')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$tag->id}}" name="id">
                            <label for="name">Tag Name:</label>                        <br>
                            <input class="form-control" type="text" id="name" name="tag_name" placeholder="{{$tag->tag_name}}">
                            <br>
                            <label for="display_name">Display Name:</label>                        <br>
                            <input class="form-control" type="text" id="display_name" name="tag_display_name" placeholder="{{$tag->tag_display_name}}">
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
