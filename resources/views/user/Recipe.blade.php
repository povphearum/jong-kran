@extends('user.home')
@section('main-content')
<link rel="stylesheet" href="{{asset('home/recipe.css')}}">
    <div class="receipe-post-area section-padding-80">
        <div class="receipe-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-left">
                            <h3>Add Recipe</h3>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-area">
                            <form action="{{route('storerecipe')}}" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Recipe Title</h5>
                                        <input type="text" class="form-control" id="recipe_name" placeholder="Recipe Name">
                                        <h5>Add imgae</h5>
                                        <div class="file-upload col-12">
                                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                                <div class="drag-text">
                                                    <h3>Drag and drop a file or select add Image</h3>
                                                </div>
                                            </div>
                                            <div class="file-upload-content">
                                                <img class="file-upload-image" src="#" alt="your image" />
                                                <div class="image-title-wrap">
                                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Discription</h5>
                                        <textarea name="text" class="form-control" id="description" cols="30" rows="10" placeholder="discription"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Tag:</h5>
                                            <select class="form-control select2" name="tags[]" id="tags" data-placeholder="Select Tags" style="width: 100%;" multiple>
                                                    @foreach($tags as $id => $tag)
                                                        <option value="{{ $id }}" {{ in_array($id, old('tags', [])) ? 'selected' : '' }}>{{ $tag->tag_display_name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        </div>
                    </div>
                                <hr>
                                @livewire('ingredients')

                                <hr>
                                @livewire('steps')
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="mx-3">Servings</h5>
                                        <input type="text" class="form-control" id="serving" placeholder="e.g 8">
                                    </div>
                                    <div class="col-6">
                                        <h5 class="">Yield</h5>
                                        <input type="text" class="form-control" id="serving" placeholder="e.g 1 9-inch cake">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        <p>Prep Time</p>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" id="pre_time" placeholder="0">
                                    </div>
                                    <div class="col-6">
                                        <select name="prepTimeMHD" id="prepTimeMHD">
                                            <option value="mins">mins</option>
                                            <option value="hours">hours</option>
                                            <option value="days">days</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <p>Cock Time</p>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control" id="pre_time" placeholder="0">
                                    </div>
                                    <div class="col-6">
                                        <select name="prepTimeMHD" id="prepTimeMHD">
                                            <option value="mins">mins</option>
                                            <option value="hours">hours</option>
                                            <option value="days">days</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row addNote">
                                    <div class="col-3 p-3">
                                        <h5>Notes</h5>
                                        <button type="button" class="btnNote  btn btn-lightGreen mt-30 " name="addNotes">+ ADD NOTES</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Make this recipe public?</h5>
                                        <input type="radio" name="yes">
                                        <label class="input-radio-circle-label-inner">Public Recipe</label><br>
                                        <input class="mx-4" type="checkbox" name="" id="">
                                        <label class="input-radio-circle-label-inner">Submit this recipe for publication?<a href="">Learn More</a></label><br>
                                        <input type="radio" name="yes">
                                        <label class="input-radio-circle-label-inner">Personal Recipe</label><br>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-danger mt-30" type="submit">Cancel</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-lightGreen mt-30" type="submit">Save</button>
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
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
</script>

@endsection
