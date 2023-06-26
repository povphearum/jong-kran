@extends('admin.home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User <a class="text-gray">| {{$user->name}}</a></h1>
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
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline py-4">
                    <div class="card-body box-profile">
                        <div class="text-center mb-3">
                            <img class="profile-user-img pf-img"
                                 src="{{$user->profile_photo_url}}"
                                 alt="{{$user->name}}">
                        </div>

                        <h3 class="profile-username text-center"></h3>
                        @foreach($user->user_roles as $role)
                        <p class="text-muted text-center">Role: "{{$role->name}}"</p>
                        @endforeach
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Name:</b> <a class="float-right">{{$user->name}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email:</b> <a class="float-right">{{$user->email}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Recipe</b> <a class="float-right">13,287</a>
                            </li>
                            <li class="list-group-item">
                                <b>Comment</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#personalinfo" data-toggle="tab">Personal Info</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="personalinfo">
                                <!-- info -->
                                <div class="bg-white shadow px-2">
                                    <div class="form-horizontal row justify-content-right ml-1">
                                        <div class="col-lg-7">
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label for="inputName">Full Name</label>
                                                    <input type="email" class="form-control" id="inputName" placeholder="{{$user->user_info->last_name}} {{$user->user_info->first_name}}" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-10 ">
                                                    <label for="inputEmail">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="{{$user->email}}" readonly>
                                                    <div class="row justify-content-end">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label for="inputName">Phone Number</label>
                                                    <input type="email" class="form-control" id="inputName" placeholder="{{$user->user_info->phone_number}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label for="inputEmail">Date Of Birth</label>
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="{{$user->user_info->date_birth}}" readonly>
                                                    <div class="row justify-content-end">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label for="inputEmail">Country</label>
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="{{$user->user_info->country}}" readonly>
                                                    <div class="row justify-content-end">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label for="inputEmail">Country</label>
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="{{$user->user_info->city}}" readonly>
                                                </div>


                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <label for="inputZipCode">Zip Code</label>
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="{{$user->user_info->zip_code}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                <!-- Recipe & Collection-->--}}
{{--                                <div class="row px-3 mt-3">--}}
{{--                                    <!-- Recipe -->--}}
{{--                                    <div class=" col-lg-6 bg-white shadow  ">--}}
{{--                                        <div class="row justify-content-center mt-4">--}}
{{--                                            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">--}}
{{--                                                {{ __('My Recipe') }}--}}
{{--                                            </h2>--}}
{{--                                        </div>--}}
{{--                                        <div class="swiper mySwiper ">--}}
{{--                                            <div class="swiper-wrapper">--}}
{{--                                                <div class="swiper-slide justify-content-center ">--}}
{{--                                                    <div class="single-best-receipe-area ">--}}
{{--                                                        <img src="img/bg-img/r1.jpg" alt="">--}}
{{--                                                        <div class="receipe-content">--}}
{{--                                                            <a href="{{route('fullrecipe')}}">--}}
{{--                                                                <h5>Sushi Easy Receipy</h5>--}}
{{--                                                            </a>--}}
{{--                                                            <div class="ratings">--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <div class="single-best-receipe-area">--}}
{{--                                                        <img src="img/bg-img/r2.jpg" alt="">--}}
{{--                                                        <div class="receipe-content">--}}
{{--                                                            <a href="{{route('fullrecipe')}}">--}}
{{--                                                                <h5>Sushi Easy Receipy</h5>--}}
{{--                                                            </a>--}}
{{--                                                            <div class="ratings">--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <div class="single-best-receipe-area">--}}
{{--                                                        <img src="img/bg-img/r3.jpg" alt="">--}}
{{--                                                        <div class="receipe-content">--}}
{{--                                                            <a href="{{route('fullrecipe')}}">--}}
{{--                                                                <h5>Sushi Easy Receipy</h5>--}}
{{--                                                            </a>--}}
{{--                                                            <div class="ratings">--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-12 text-center mb-4">--}}
{{--                                            <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Recipe >>></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--Collection-->--}}
{{--                                    <div class=" col-lg-6 bg-white shadow  ">--}}
{{--                                        <div class="row justify-content-center mt-4">--}}
{{--                                            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">--}}
{{--                                                {{ __('Collections') }}--}}
{{--                                            </h2>--}}
{{--                                        </div>--}}
{{--                                        <div class="swiper mySwiper ">--}}
{{--                                            <div class="swiper-wrapper">--}}
{{--                                                <div class="swiper-slide justify-content-center ">--}}
{{--                                                    <div class="single-best-receipe-area ">--}}
{{--                                                        <img src="img/bg-img/r4.jpg" alt="">--}}
{{--                                                        <div class="receipe-content">--}}
{{--                                                            <a href="{{route('fullrecipe')}}">--}}
{{--                                                                <h5>Sushi Easy Receipy</h5>--}}
{{--                                                            </a>--}}
{{--                                                            <div class="ratings">--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <div class="single-best-receipe-area">--}}
{{--                                                        <img src="img/bg-img/r5.jpg" alt="">--}}
{{--                                                        <div class="receipe-content">--}}
{{--                                                            <a href="{{route('fullrecipe')}}">--}}
{{--                                                                <h5>Sushi Easy Receipy</h5>--}}
{{--                                                            </a>--}}
{{--                                                            <div class="ratings">--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="swiper-slide">--}}
{{--                                                    <div class="single-best-receipe-area">--}}
{{--                                                        <img src="img/bg-img/r6.jpg" alt="">--}}
{{--                                                        <div class="receipe-content">--}}
{{--                                                            <a href="{{route('fullrecipe')}}">--}}
{{--                                                                <h5>Sushi Easy Receipy</h5>--}}
{{--                                                            </a>--}}
{{--                                                            <div class="ratings">--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-12 text-center mb-4">--}}
{{--                                            <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Collections >>></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
{{--                            <!--More Recipe -->--}}
{{--                            <div class="tab-pane" id="recipe">--}}
{{--                                <div class="col-12 col-sm-6 col-lg-4">--}}
{{--                                    <div class="single-best-receipe-area mb-30">--}}
{{--                                        <img src="img/bg-img/r1.jpg" alt="">--}}
{{--                                        <div class="receipe-content">--}}
{{--                                            <a href="{{route('fullrecipe')}}">--}}
{{--                                                <h5>Sushi Easy Receipy</h5>--}}
{{--                                            </a>--}}
{{--                                            <div class="ratings">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- More Collections -->--}}
{{--                            <div class="tab-pane" id="collection">--}}
{{--                                <div class="col-12 col-sm-6 col-lg-4">--}}
{{--                                    <div class="single-best-receipe-area mb-30">--}}
{{--                                        <img src="img/bg-img/r4.jpg" alt="">--}}
{{--                                        <div class="receipe-content">--}}
{{--                                            <a href="{{route('fullrecipe')}}">--}}
{{--                                                <h5>Sushi Easy Receipy</h5>--}}
{{--                                            </a>--}}
{{--                                            <div class="ratings">--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

@endsection
