@extends('admin.home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Recipe</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('adminhome')}}">Home</a></li>
                        <li class="breadcrumb-item active">Recipe</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
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
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session()->get('message')}}
                            </div>

                        @endif
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>User </th>
                                <th>Recipe Name</th>
                                <th>Ingredients</th>
                                <th>Review</th>
                                <th>Overall Rating</th>


                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($recipes as $recipe)
                                <td>{{$recipe->user_id}}</td>
                                <td>{{$recipe->recipe_name}}</td>

                                    @foreach($recipe->ingredients as $ingredient)

                                            <td>
                                                {{$ingredient->ingredient_name}}
                                            </td>

                                    @endforeach

                                @endforeach
                            </tr>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection

