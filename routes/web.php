<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/', [HomeController::class, 'Index'])->name('index-home');

Route::controller(HomeController::class)->group(function () {



    route::get('/about',[HomeController::class,'about']);
    route::get('/blog',[HomeController::class,'blog']);
    route::get('/contact',[HomeController::class,'contact']);

    route::get('/full-recipe/{id}/{recipe_name}','FullRecipe')->name('full-recipe');
    route::get('/elements',[HomeController::class,'elements']);
    Route::get('/search','SearchRecipe')->name('search');

    route::get('/england',[HomeController::class,'england'])->name('england');
    route::get('/germany',[HomeController::class,'germany'])->name('germany');
    route::get('/italy',[HomeController::class,'italy'])->name('italy');
    route::get('/france',[HomeController::class,'france'])->name('france');

    route::get('/cam',[HomeController::class,'cam'])->name('cam');
    route::get('/viet',[HomeController::class,'viet'])->name('viet');
    route::get('/thai',[HomeController::class,'thai'])->name('thai');
    route::get('/loa',[HomeController::class,'loa'])->name('loa');
    route::get('/indo',[HomeController::class,'indo'])->name('indo');

    route::get('/us',[HomeController::class,'us'])->name('us');
    route::get('/canada',[HomeController::class,'canada'])->name('canada');
    route::get('/mexico',[HomeController::class,'mexico'])->name('mexico');

});
Route::middleware(['auth', 'role:user|admin|manager',])->group(function (){
    Route::controller(HomeController::class)->group(function (){


        route::get('/out',[HomeController::class,'out'])->name('out');
        Route::post('full-recipe/store-review','StoreReview')->name('store-review');
        Route::get('edit-review/{id}','EditReview')->name('edit-review');
        Route::post('update-review','UpdateReview')->name('update-review');
        Route::get('remove-review/{id}','RemoveReview')->name('remove-review');
        Route::post('store-feedback','StoreFeedback')->name('store-feedback');
        Route::post('store-question','StoreQuestion')->name('store-question');


    });
    Route::controller(ClientController::class)->group(function (){
        route::get('/info/{id}/{name}','Info')->name('info');
        Route::get('/profile/update-info',ClientController::class)->name('profile-update');

    });

    Route::controller(RecipeController::class)->group(function (){
        Route::get('/add-recipe','AddRecipe')->name('addrecipe');
        Route::post('/add-recipe/store-recipe','StoreRecipe')->name('storerecipe');
    });


});

Route::middleware(['auth', 'role:admin|manager'])->group(function (){
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/admin/dashboard','Index')->name('adminhome');


    });
    Route::controller(CategoryController::class)->group(function (){
        Route::get('/admin/category','Category')->name('category');
        Route::get('/admin/category/add','AddCategory')->name('addcate');
        Route::get('/admin/category/update/{id}','UpdateCategory')->name('updatecate');
        Route::get('/admin/category/delete/{id}','DeleteCategory')->name('deletecate');
        Route::post('/admin/category/storecate','StoreCategory')->name('storecate');
        Route::post('/admin/category/edit-category','EditCategory')->name('editcate');

    });
    Route::controller(TagController::class)->group(function (){
        Route::get('/admin/tags','Tags')->name('tag');
        Route::get('/admin/tag/add','AddTag')->name('addtag');
        Route::get('/admin/tag/update/{id}','UpdateTag')->name('updatetag');
        Route::get('/admin/tag/delete{id}','DeleteTag')->name('deletetag');
        Route::post('/admin/tag/storetag','StoreTag')->name('storetag');
        Route::post('/admin/tag/edit-tag','EditTag')->name('edittag');


    });
    Route::controller(RecipeController::class)->group(function (){
        Route::get('/admin/recipe','Recipe')->name('recipe');

    });
    Route::controller(ReviewController::class)->group(function (){
        Route::get('/admin/comment','Comment')->name('comment');
        Route::get('/admin/reviews','Review')->name('review');
        Route::get('/admin/feedback','FeedBack')->name('feedback');
        Route::get('/admin/question','Question')->name('question');
    });
    Route::controller(AdminController::class)->group(function (){
       Route::get('/admin/continent','Continent')->name('continent');
       Route::get('/admin/country','Country')->name('country');
       Route::get('/admin/events','Events')->name('events');
       Route::get('/admin/add-continent','AddContinent')->name('add-continent');
       Route::get('/admin/add-county','AddCounty')->name('add-county');
       Route::get('/admin/add-events','AddEvents')->name('add-events');
       Route::post('/admin/store-continent','StoreContinent')->name('store-continent');
       Route::post('/admin/store-county','StoreCounty')->name('store-county');
       Route::post('/admin/store-evens','StoreEvents')->name('store-evens');

        Route::get('/admin/edit-continent','EditContinent')->name('edit-continent');
        Route::get('/admin/edit-county','EditCounty')->name('edit-county');
        Route::get('/admin/edit-events','EditEvents')->name('edit-events');

        Route::post('/admin/update-continent','UpdateContinent')->name('update-continent');
        Route::post('/admin/update-county','UpdateCounty')->name('update-county');
        Route::post('/admin/update-evens','UpdateEvens')->name('update-evens');

        Route::get('/admin/delete-continent','DeleteContinent')->name('delete-continent');
        Route::get('/admin/delete-county','DeleteCounty')->name('delete-county');
        Route::get('/admin/delete-events','DeleteEvents')->name('delete-events');
    });



    Route::controller(UserController::class)->group(function (){
        Route::get('/admin/user','User')->name('user');
        Route::get('/admin/user/show/{id}','UserShow')->name('usershow');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


