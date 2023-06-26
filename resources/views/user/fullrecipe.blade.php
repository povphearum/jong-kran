@extends('user.home')
@section('stylecss')
    <style>
    .rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
    }

    .rating > input{ display:none;}

    .rating > label {
    position: relative;
    width: 1em;
    font-size: 6vw;
    color: #FFD600;
    cursor: pointer;
    }
    .rating > label::before{
    content: "\2605";
    position: absolute;
    opacity: 0;
    }
    .rating > label:hover:before,
    .rating > label:hover ~ label:before {
    opacity: 1 !important;
    }

    .rating > input:checked ~ label:before{
    opacity:1;
    }

    .rating:hover > input:checked ~ label:before{ opacity: 0.4; }
</style>
@endsection
@section('main-content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/breadcumb3.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Recipe</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="container">
        <div class="receipe-post-area section-padding-80">

            <!-- Receipe Post Search -->
            <div class="receipe-post-search mb-80">
                <div class="container">
                </div>
            </div>

            <!-- Receipe Slider -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="receipe-slider owl-carousel">
                            <img src="img/bg-img/bg5.jpg" alt="">
                            <img src="img/bg-img/bg5.jpg" alt="">
                            <img src="img/bg-img/bg5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receipe Content Area -->
            <div class="receipe-content-area">
                <div class="container">
                    @php
                        $date = $recipe->created_at;
                        $date = Carbon\Carbon::parse($date);
                        $elapsed = $date->diffForHumans();


                  @endphp
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="receipe-headline my-3">
                                <span>{{$elapsed}}</span>
                                <h2>{{$recipe->recipe_name}}</h2>
                                <div class="receipe-ratings">
                                    <div class="ratings">

                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
{{--                                        @elseif($total_rating>=4)--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                        @elseif($total_rating>=3)--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                        @elseif($total_rating>=2)--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                        @elseif($total_rating>=1)--}}
{{--                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                        @else--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                                            <i class="fa fa-star-o" aria-hidden="true"></i>--}}

                                    </div>
                                </div>
                                @if($recipe->user_id == Auth::user()->id)
                                    <button type="button" class="btn btn-primary">Save To Collection</button>

                                @endif
                                <div class="receipe-duration mt-5">
                                    <h6>Prep: {{$recipe->prep_time}} {{$recipe->prepMHD}}</h6>
                                    <h6>Cook: {{$recipe->cook_time}} {{$recipe->cookMHD}}</h6>
                                    <h6>Yields: {{$recipe->serving}} Servings</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- new modify --}}

                    @if($recipe->video)
                    <div class="row">
                        <div class="col-12 mx-4">
                            <video controls src="{{asset($recipe->video)}}" width="500"></video>
                        </div>
                    </div>
                    @endif

                    <!-- Ingredients -->
                    <h4 class="mb-4">Ingredients</h4>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                <h4>01.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                <h4>02.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                <h4>03.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                <h4>04.</h4>
                                <p>Hello</p>
                            </div>
                        </div>
                    </div>

                    <h4 class="mb-4">Steps</h4>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                <h4>01.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                <h4>02.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                <h4>03.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                            </div>
                            <!-- Single Preparation Step -->
                            <div class="single-preparation-step d-flex">
                                <h4>04.</h4>
                                <p>Hello</p>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading text-left">
                                    <h3>Write a Review:</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container bg-white">
                        @if(Route::has('login'))
                            @auth
                                <form action="{{route('store-review')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$recipe->id}}" name="recipe_id">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="float-right">{{Auth::user()->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                                            <p>{{Auth::user()->email}}</p>
                                        </div>
                                        <div class="col-11">
                                            <textarea class="form-control" name="comment" cols="40"></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-0">Rating: </div>
                                    <div class="row mt-0">
                                        <div class="ms-0">
                                            <div class="rating">
                                                <input type="radio" name="rating" value="5" id="5"><label for="5" style="font-size:35px">☆</label>
                                                <input type="radio" name="rating" value="4" id="4"><label for="4" style="font-size:35px">☆</label>
                                                <input type="radio" name="rating" value="3" id="3"><label for="3" style="font-size:35px">☆</label>
                                                <input type="radio" name="rating" value="2" id="2"><label for="2" style="font-size:35px">☆</label>
                                                <input type="radio" name="rating" value="1" id="1"><label for="1" style="font-size:35px">☆</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn delicious-btn mt-30 mb-30" type="submit">Post Comments</button>
                                </form>
                            @else
                                <a href="{{route('login')}}" class="btn delicious-btn btn-4 m-1">Login</a>
                                @if(Route::has('register'))
                                @endif
                            @endauth
                        @endif
                    </div>
                <div class="container">
                    <div class="row">
                        <div class="col-11 mt-4">
                            @foreach($comments as $comment)
                                <a>{{ $comment->user_review->name }}</a>
                                <div class="dropdown float-right">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                    </button>
                                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="{{route('edit-review',$comment->id)}}">Edit</a></li>
                                        <li><a class="dropdown-item" href="{{route('remove-review',$comment->id)}}">Delete</a></li>

                                    </ul>
                                </div>
                                <p>{{$comment->comment}}</p>
                                <div class="receipe-ratings">
                                    <div class="ratings">
                                        @if($comment->rating==5)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        @elseif($comment->rating>=4)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($comment->rating>=3)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($comment->rating>=2)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @elseif($comment->rating>=1)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @endif


                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Follow Us Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <h5>Follow Us Instragram</h5>
                </div>
            </div>
        </div>
        <!-- Instagram Feeds -->
        <div class="insta-feeds d-flex flex-wrap">
            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta1.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta2.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta3.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta4.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta5.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta6.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="img/bg-img/insta7.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- ##### Follow Us Instagram Area End ##### -->
@endsection
