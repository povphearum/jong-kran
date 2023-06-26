@extends('admin.home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <p class="m-0">Country |<a class="text-gray"> Add Country</a></p>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">Country</li>
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
                        <h3 class="card-title">Country</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route('store-county')}}" method="POST">
                            @csrf
                            <label for="Country_name">Country Name:</label>                        <br>
                            <input class="form-control" type="text" id="Country_name" name="name" placeholder="Enter Country Name">
                            <br>
                            <label id="Continent_name">Continent</label>
                            <select class="form-control select2 select2-danger" name="continent_id" id="continent_id" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                @foreach($continents as $continent)

                                    <option value="{{$continent->id}}" >{{$continent->name}}</option>

                                @endforeach
                            </select>
                            <br>

                            <div class="justify-content-end">
                                <button type="submit" class="btn btn-success justify-content-end">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
