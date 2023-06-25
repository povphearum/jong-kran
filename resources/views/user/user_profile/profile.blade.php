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

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary mt-5 ">
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
                                <li class="nav-item"><a class="nav-link" href="#recipe" data-toggle="tab">My Recipe</a></li>
                                <li class="nav-item"><a class="nav-link" href="#collection" data-toggle="tab">Collection</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personalinfo">
                                    <!-- info -->
                                    <div class="bg-white shadow px-2">
                                        <div class="form-horizontal row justify-content-center">
                                            <div class="col-lg-5 justify-content-center text-center py-4 px-4">
                                                <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                                                    {{ __('Profile Information') }}
                                                </h2>
                                                <h6 class=" text-muted">
                                                    {{ __('Update your account\'s profile information and email address') }}
                                                </h6>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group row">
                                                    <div class="col-sm-10 mt-4">
                                                        <label for="inputName">Name</label>
                                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10 ">
                                                        <label for="inputEmail">Email</label>
                                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                                    <div class="row justify-content-end">
                                                        <div class="px-3 mt-3">
                                                            <button type="submit" class="btn btn-danger">Save</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pw -->
                                    <div class="bg-white shadow px-2 mt-3 ">
                                        <div class="form-horizontal row justify-content-center">
                                            <div class="col-lg-5 justify-content-center text-center py-4 px-4">
                                                <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight ">
                                                    {{ __('Update Password') }}
                                                </h2>
                                                <h6 class=" text-muted">
                                                    {{ __('Ensure your account is using a long, random password to stay secure') }}
                                                </h6>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group row">
                                                    <div class="col-sm-10 mt-4">
                                                        <label for="inputcpw">Current Password</label>
                                                        <input type="password" class="form-control" id="inputpw" placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <label for="inputnpw">New Password</label>
                                                        <input type="password" class="form-control" id="inputnpw" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10 ">
                                                        <label for="inputcpw">Confirm Password</label>
                                                        <input type="password" class="form-control" id="inputcpw" placeholder="Confirm Password">
                                                        <div class="row justify-content-end">
                                                            <div class="px-3 mt-3">
                                                                <button type="submit" class="btn btn-danger">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="single-best-receipe-area mb-30">
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
                                </div>
                                <!-- More Collections -->
                                <div class="tab-pane" id="collection">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="single-best-receipe-area mb-30">
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
