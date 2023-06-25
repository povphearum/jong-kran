@extends('user.home')
@section('main-content')
    <section class="best-receipe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Search Result: {{$search_text}}</h3>
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
@endsection
