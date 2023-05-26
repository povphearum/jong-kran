@extends('user.home')
@section('main-content')
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
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <h5>Recipe Title</h5>
                                        <input type="text" class="form-control" id="recipe_name" placeholder="Recipe Name">
                                    </div>
                                    <div class="col-6">
                                        <h5>Add image</h5>
                                        <input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/*">
                                    </div>
                                    <div class="col-12">
                                        <h5>Discription</h5>
                                        <textarea name="text" class="form-control" id="description" cols="30" rows="10" placeholder="discription"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">    
                                    <div class="col-12 addIngre">
                                        <h5 class="mx-3">Ingredients</h5>
                                        <input type="text" class="form-control" id="ingredients_1" placeholder="e.g 2 cups flour,sifted">
                                        <input type="text" class="form-control" id="ingredients_2" placeholder="e.g 1 cup sugar">
                                        <input type="text" class="form-control" id="ingredients_3" placeholder="e.g 2 tablespoons butter,softened ">
                                    </div>
                                    <div class="col-4 p-2">
                                        <button type="button" class="btnIngre btn-lightGreen btn mt-30">+ ADD INGREDIENT</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">    
                                    <div class="col-12 addStep">
                                        <h5 class="mx-3">Step</h5>
                                        <input type="text" class="form-control" id="ingredients_1" placeholder="e.g ...">
                                        <input type="text" class="form-control" id="ingredients_2" placeholder="e.g ...">
                                        <input type="text" class="form-control" id="ingredients_3" placeholder="e.g ...">
                                    </div>
                                    <div class="col-4 p-2">
                                        <button type="button" class="btnStep btn btn-lightGreen  mt-30">+ ADD STEP</button>
                                    </div>
                                </div>
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
    <script src="home/recipe.js"></script>
@endsection
