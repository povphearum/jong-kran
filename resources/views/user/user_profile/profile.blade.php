@extends('user.home')
@section('main-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline py-4">
                        <div class="card-body box-profile">
                            <div class="text-center mb-3">
                                <img class="profile-user-img pf-img"
                                     src="{{Auth::user()->profile_photo_url}}"
                                     alt="{{Auth::user()->name}}">
                            </div>

                            <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Followers</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="float-right">13,287</a>
                                </li>
                            </ul>

                            <a href="{{route('profile-update')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                            <a href="#" class="btn btn-primary btn-block"><b>Change Password</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#personalinfo" data-toggle="tab">Personal Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="#recipe" data-toggle="tab">My Recipe</a></li>
                                <li class="nav-item"><a class="nav-link" href="#collection" data-toggle="tab">Collection</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personalinfo">
                                    <!-- info -->
                                    <div class="bg-white shadow px-2">
                                        <div class="form-horizontal row justify-content-right ml-1">
                                            <form action="">
                                            <div class="col-lg-7">

                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputName">Last Name</label>
                                                        <input type="text" name="last_name" class="form-control" id="inputName" value="{{$user->user_info->last_name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputName">First Name</label>
                                                        <input type="text" name="first_name" class="form-control" id="inputName" value="{ {{$user->user_info->first_name}}" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputName">Phone Number</label>
                                                        <input type="text" class="form-control" name="phone_number" id="inputName" value="{{$user->user_info->phone_number}}" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputEmail">Date Of Birth</label>
                                                        <input type="date" class="form-control" id="inputEmail" value="{{$user->user_info->date_birth}}">
                                                        <div class="row justify-content-end">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputEmail">Country</label>
                                                        <input type="email" class="form-control" id="inputEmail" value="{{$user->user_info->country}}" >
                                                        <div class="row justify-content-end">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputEmail">Country</label>
                                                        <input type="email" class="form-control" id="inputEmail" value="{{$user->user_info->city}}" >
                                                    </div>


                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputZipCode">Zip Code</label>
                                                        <input type="email" class="form-control" id="inputEmail" value="{{$user->user_info->zip_code}}">
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Recipe & Collection-->
                                    <div class="row px-3 mt-3">
                                    <!-- Recipe -->
                                    <div class=" col-lg-6 bg-white shadow  ">
                                        <div class="row justify-content-center mt-4">
                                            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                                                {{ __('My Recipe') }}
                                            </h2>
                                        </div>
                                            <div class="swiper mySwiper ">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide justify-content-center ">
                                                        <div class="single-best-receipe-area ">
                                                            <img src="img/bg-img/r1.jpg" alt="">
                                                            <div class="receipe-content">
                                                                <a href="/">
                                                                    <h5>Sushi Easy Receipy</h5>
                                                                </a>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="single-best-receipe-area">
                                                            <img src="img/bg-img/r2.jpg" alt="">
                                                            <div class="receipe-content">
                                                                <a href="/">
                                                                    <h5>Sushi Easy Receipy</h5>
                                                                </a>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="single-best-receipe-area">
                                                            <img src="img/bg-img/r3.jpg" alt="">
                                                            <div class="receipe-content">
                                                                <a href="/">
                                                                    <h5>Sushi Easy Receipy</h5>
                                                                </a>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-center mb-4">
                                                <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Recipe >>></a>
                                            </div>
                                        </div>
                                    <!--Collection-->
                                    <div class=" col-lg-6 bg-white shadow  ">
                                        <div class="row justify-content-center mt-4">
                                            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                                                {{ __('Collections') }}
                                            </h2>
                                        </div>
                                        <div class="swiper mySwiper ">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide justify-content-center ">
                                                    <div class="single-best-receipe-area ">
                                                        <img src="img/bg-img/r4.jpg" alt="">
                                                        <div class="receipe-content">
                                                            <a href="/">
                                                                <h5>Sushi Easy Receipy</h5>
                                                            </a>
                                                            <div class="ratings">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-best-receipe-area">
                                                        <img src="img/bg-img/r5.jpg" alt="">
                                                        <div class="receipe-content">
                                                            <a href="/">
                                                                <h5>Sushi Easy Receipy</h5>
                                                            </a>
                                                            <div class="ratings">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="single-best-receipe-area">
                                                        <img src="img/bg-img/r6.jpg" alt="">
                                                        <div class="receipe-content">
                                                            <a href="/">
                                                                <h5>Sushi Easy Receipy</h5>
                                                            </a>
                                                            <div class="ratings">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center mb-4">
                                            <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Collections >>></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!--More Recipe -->
                                <div class="tab-pane" id="recipe">
                                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                        <div class="single-best-receipe-area mb-30">
                                            <div class="row">
                                                <div class="mt-4 col-6 float-left">
                                                    <img src="{{asset('upload/images/image1.jpg')}}" width="100%" alt="">
                                                </div>
                                                <div class="receipe-content col-6 float-right">
                                                    <a href="/">
                                                        <h5>Hello</h5>
                                                    </a>
                                                    <div class="ratings">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="mt-2">
                                                        <ul>
                                                            <li><a href="" class="text-danger">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="border border-bottom border-black"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                        <div class="single-best-receipe-area mb-30">
                                            <div class="row">
                                                <div class="mt-4 col-6 float-left">
                                                    <img src="{{asset('upload/images/image1.jpg')}}" width="100%" alt="">
                                                </div>
                                                <div class="receipe-content col-6 float-right">
                                                    <a href="/">
                                                        <h5>Hello</h5>
                                                    </a>
                                                    <div class="ratings">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="mt-2">
                                                        <ul>
                                                            <li><a href="" class="text-danger">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="border border-bottom border-black"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- More Collections -->
                                <div class="tab-pane" id="collection">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="single-best-receipe-area mb-30">
                                            <img src="" alt="">
                                            <div class="receipe-content">
                                                <a href="/">
                                                    <h5>Sushi Easy Receipy</h5>
                                                </a>
                                                <div class="ratings">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    </section>
    <!-- /.content -->
@endsection
