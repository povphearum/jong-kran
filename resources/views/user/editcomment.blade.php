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
    <link rel="stylesheet" href="{{asset('home/recipe.css')}}">
    <div class="receipe-post-area section-padding-80">
        <div class="receipe-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-left">
                            <h3>Edit Review</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                        <div class="contact-form-area">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('storerecipe')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="container">
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Comment</h5>
                                            <input type="text" class="form-control" id="recipe_name" name="recipe_name" placeholder="Comment">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <h5 class="float-left mt-2">Rating</h5>
                                            <div class="rating float-right">
                                                <input type="radio" name="rating" value="5" id="5"><label for="5" style="font-size:30px">☆</label>
                                                <input type="radio" name="rating" value="4" id="4"><label for="4" style="font-size:30px">☆</label>
                                                <input type="radio" name="rating" value="3" id="3"><label for="3" style="font-size:30px">☆</label>
                                                <input type="radio" name="rating" value="2" id="2"><label for="2" style="font-size:30px">☆</label>
                                                <input type="radio" name="rating" value="1" id="1"><label for="1" style="font-size:30px">☆</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-danger mt-30" type="button" href="/">Cancel</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-lightGreen mt-30" type="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <!-- Select2 -->
    <script src="{{asset('Admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('home/recipe.js')}}"></script>
    <script>

        $(document).ready(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>

@endsection
