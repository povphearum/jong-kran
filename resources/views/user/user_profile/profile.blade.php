@extends('user.home')
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile mt-5 mb-5">
                                <div class="text-center">
                                    <img class="profile-user-img pf_img  mb-4"
                                         src="../../img/User_img/img.png"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Ngag Puthsabbos</h3>

                                <p class="text-muted text-center">Software Engineer</p>

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

                                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary mt-5 mb-3">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="bi bi-mortarboard"></i> Education</strong>
                                <p class="text-muted">
                                    Major in Computer Science from Cambodia Academy of Digital Technology
                                </p>

                                <hr>

                                <strong><i class="bi bi-geo-alt"></i> Location</strong>

                                <p class="text-muted">Malibu, California</p>

                                <hr>

                                <strong><i class="bi bi-gear"></i> Skills</strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">UI Design</span>
                                    <span class="tag tag-success">Coding</span>
                                    <span class="tag tag-info">Javascript</span>
                                    <span class="tag tag-warning">PHP</span>
                                    <span class="tag tag-primary">Node.js</span>
                                </p>

                                <hr>

                                <strong><i class="bi bi-journal-text"></i> Notes</strong>

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
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
                                    <li class="nav-item"><a class="nav-link" href="#myrecipe" data-toggle="tab">My Recipe</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#colection" data-toggle="tab">Collections</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- personal info -->

                                    <div class="active tab-pane" id="personalinfo">
                                        <!-- info -->
                                        <div class="px-2 py-3 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                            <div class="form-group row p-2  ">
                                                <div class="col-lg-5">
                                                    <h2 class="text-lg font-medium text-gray-900">
                                                        {{ __('Profile Information') }}
                                                    </h2>
                                                    <p class="mt-1 text-sm text-gray-600">
                                                        {{ __("Update your account's profile information and email address.") }}
                                                    </p>
                                                </div>
                                                <div class="col-lg-7 ">
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <label for="inputName">Name</label>
                                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-11">
                                                            <label for="inputEmail">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3 justify-items-end ">
                                                        <div class="offset-sm-9 col-sm-10 ">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- pw -->
                                        <div class="mt-3 px-2 py-3 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                            <div class="form-group row p-2 border-dark ">
                                                <div class="col-lg-5">
                                                    <h2 class="text-lg font-medium text-gray-900">
                                                        {{ __('Update Password') }}
                                                    </h2>
                                                    <p class="mt-1 text-sm text-gray-600">
                                                        {{ __("Ensure your account is using a long, random password to stay secure.") }}
                                                    </p>
                                                </div>
                                                <div class="col-lg-7 ">
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <label for="inputPW">Current Password</label>
                                                            <input type="password" class="form-control" id="inputPW" placeholder="Current Password">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-11">
                                                            <label for="inputNPW">New Password</label>
                                                            <input type="password" class="form-control" id="inputNPW" placeholder="New Password">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-11">
                                                            <label for="inputEmail">Confirm Password</label>
                                                            <input type="email" class="form-control" id="inputCPW" placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3 justify-items-end ">
                                                        <div class="offset-sm-9 col-sm-10 ">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Recipe & Collection -->
                                        <div class="row justify-content-center px-3 mt-3 ">
                                                <div class="col-lg-6 shadow">
                                                <div class="form-group row justify-content-center">
                                                <!-- Recipe -->
                                                    <h2 class="text-lg text-center font-medium text-gray-900 mt-3">
                                                        {{ __('My Recipe') }}
                                                    </h2>
                                                    <div class="swiper mySwiper m-5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="single-best-receipe-area ">
                                                                    <img src="img/bg-img/r2.jpg" alt="">
                                                                    <div class="receipe-content">
                                                                         <a href="{{route('fullrecipe')}}">
                                                                            <h5>Homemade Burger</h5>
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
                                                                <div class="single-best-receipe-area ">
                                                                    <img src="img/bg-img/r2.jpg" alt="">
                                                                    <div class="receipe-content">
                                                                         <a href="{{route('fullrecipe')}}">
                                                                            <h5>Homemade Burger</h5>
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
                                                                <div class="single-best-receipe-area ">
                                                                    <img src="img/bg-img/r2.jpg" alt="">
                                                                    <div class="receipe-content">
                                                                         <a href="{{route('fullrecipe')}}">
                                                                            <h5>Homemade Burger</h5>
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
                                                    <div class="col-lg-12 text-center">
                                                        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Recipe >>></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 shadow">
                                                <div class="form-group row justify-content-center">
                                                <!-- Collection -->
                                                    <h2 class="text-lg text-center font-medium text-gray-900 mt-3">
                                                        {{ __('Collections') }}
                                                    </h2>
                                                    <div class="swiper mySwiper m-5">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="single-best-receipe-area">
                                                                    <img src="img/bg-img/r2.jpg" alt="">
                                                                    <div class="receipe-content">
                                                                        <a href="{{route('fullrecipe')}}">
                                                                            <h5>Homemade Burger</h5>
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
                                                                        <a href="{{route('fullrecipe')}}">
                                                                            <h5>Homemade Burger</h5>
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
                                                                            <h5>Homemade Burger</h5>

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
                                                    <div class="col-lg-12 text-center">
                                                        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Collection >>></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.personal info -->

                                    <!-- My Recipe -->
                                    <div class="tab-pane" id="myrecipe">
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single-best-receipe-area mb-3">
                                                <img src="img/bg-img/r2.jpg" alt="">
                                                <div class="receipe-content">
                                                    <a href="{{route('fullrecipe')}}">
                                                        <h5>Homemade Burger</h5>
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
                                    <!-- /.tMy Recipe -->

                                    <!-- Collection -->
                                    <div class="tab-pane" id="colection">
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single-best-receipe-area mb-3">
                                                <img src="img/bg-img/r2.jpg" alt="">
                                                <div class="receipe-content">
                                                    <a href="{{route('fullrecipe')}}">
                                                        <h5>Homemade Burger</h5>
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
                                    <!-- /.Collection -->
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
    </div>
    <!-- /.content-wrapper -->
@endsection
