@extends('user.home')
@section('main-content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Asean cuisine</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Asian food incorporates a few significant provincial cooking styles: Central Asian, East Asian, North Asian, South Asian, Southeast Asian, and West Asian.</p>
                                <a href="/" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See Receipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">European cuisine</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">The cuisines of Western countries are diverse, although there are common characteristics that distinguish them from those of other regions.</p>
                                <a href="/" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See Receipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg7.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">North Africa</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">African cuisine is a staple of the continent's culture, and its history is enwined with the story of the people of Africa. The foods that Africans eat have been influenced by their religions, as well as by their climates and lifestyles.</p>
                                <a href="/" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See Receipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <section class="top-catagory-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Top Catagory Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-catagory">
                        <img src="img/bg-img/bg2.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Strawberry Cake</h3>
                            <h6>Simple &amp; Delicios</h6>
                            <a href="/" class="btn delicious-btn">See Full Receipe</a>
                        </div>
                    </div>
                </div>
                <!-- Top Catagory Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-catagory">
                        <img src="img/bg-img/bg2.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Strawberry Cake</h3>
                            <h6>Simple &amp; Delicios</h6>
                            <a href="/" class="btn delicious-btn">See Full Receipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### Best Receipe Area Start ##### -->
    <section class="best-receipe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>The best Receipies</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Best Receipe Area -->
                @foreach($recipes as $recipe)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="{{$recipe->image}}" alt="food_img">
                        <div class="receipe-content">
                            <a href="{{route('full-recipe',[$recipe->id,$recipe->recipe_name])}}">
                                <h5>{{$recipe->recipe_name}}</h5>
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
                @endforeach

{{--                <!-- Single Best Receipe Area -->--}}
{{--                <div class="col-12 col-sm-6 col-lg-4">--}}
{{--                    <div class="single-best-receipe-area mb-30">--}}
{{--                        <img src="img/bg-img/r2.jpg" alt="">--}}
{{--                        <div class="receipe-content">--}}
{{--                            <a href="{{route('fullrecipe')}}">--}}
{{--                                <h5>Homemade Burger</h5>--}}
{{--                            </a>--}}
{{--                            <div class="ratings">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Best Receipe Area -->--}}
{{--                <div class="col-12 col-sm-6 col-lg-4">--}}
{{--                    <div class="single-best-receipe-area mb-30">--}}
{{--                        <img src="img/bg-img/r3.jpg" alt="">--}}
{{--                        <div class="receipe-content">--}}
{{--                            <a href="{{route('fullrecipe')}}">--}}
{{--                                <h5>Vegan Smoothie</h5>--}}
{{--                            </a>--}}
{{--                            <div class="ratings">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Best Receipe Area -->--}}
{{--                <div class="col-12 col-sm-6 col-lg-4">--}}
{{--                    <div class="single-best-receipe-area mb-30">--}}
{{--                        <img src="img/bg-img/r4.jpg" alt="">--}}
{{--                        <div class="receipe-content">--}}
{{--                            <a href="{{route('fullrecipe')}}}">--}}
{{--                                <h5>Calabasa soup</h5>--}}
{{--                            </a>--}}
{{--                            <div class="ratings">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Best Receipe Area -->--}}
{{--                <div class="col-12 col-sm-6 col-lg-4">--}}
{{--                    <div class="single-best-receipe-area mb-30">--}}
{{--                        <img src="img/bg-img/r5.jpg" alt="">--}}
{{--                        <div class="receipe-content">--}}
{{--                            <a href="{{route('fullrecipe')}}">--}}
{{--                                <h5>Homemade Breakfast</h5>--}}
{{--                            </a>--}}
{{--                            <div class="ratings">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single Best Receipe Area -->--}}
{{--                <div class="col-12 col-sm-6 col-lg-4">--}}
{{--                    <div class="single-best-receipe-area mb-30">--}}
{{--                        <img src="img/bg-img/r6.jpg" alt="">--}}
{{--                        <div class="receipe-content">--}}
{{--                            <a href="{{route('fullrecipe')}}">--}}
{{--                                <h5>Healthy Fruit Desert</h5>--}}
{{--                            </a>--}}
{{--                            <div class="ratings">--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                <i class="fa fa-star-o" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <section class="cta-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content text-center">
                        <h2>Gluten Free Receipies</h2>
                        <p>Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accumsan molestie. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras sed accumsan neque. Ut vulputate, lectus vel aliquam congue, risus leo elementum nibh</p>
                        <a href="/" class="btn delicious-btn">Discover all the receipies</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Small Receipe Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
        <div class="container">
            <div class="row">
    </section>
    <!-- ##### Small Receipe Area End ##### -->

    <!-- ##### Quote Subscribe Area Start ##### -->
    <section class="quote-subscribe-adds">
        <div class="container">
            <div class="row align-items-end">
                <!-- Quote -->
                <div class="col-12 col-lg-4">
                    <div class="quote-area text-center">
                        <span>"</span>
                        <h4>Nothing is better than going home to family and eating good food and relaxing</h4>
                        <p>John Smith</p>
                        <div class="date-comments d-flex justify-content-between">
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="col-12 col-lg-4">
                    <div class="feedback">
                        <h4>Give your feedback here</h4>
                        <!-- Form -->
                        <div class="newsletter-form bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/bg1.jpg')}});">
                            <form action="{{ route('store-feedback') }}" method="POST">
                                @csrf
                                <input type="text" name="feedback" placeholder="Feedback here">
                                <button type="submit" class="btn delicious-btn w-100">Submit</button>
                            </form>
                            <p>Food brings people together on many different levels. It’s nourishment of the soul and body; it’s truly love.</p>
                        </div>
                    </div>
                </div>

                <!-- Adds -->
                <div class="col-12 col-lg-4">
                    <div class="delicious-add">
                        <img src="img/bg-img/add.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Quote Subscribe Area End ##### -->

    <!-- ##### Follow Us Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
    <!-- ##### Follow Us Instagram Area End ##### -->

@endsection
