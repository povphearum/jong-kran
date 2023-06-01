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
route::get('/', [HomeController::class, 'Index']);

Route::controller(HomeController::class)->group(function () {



    route::get('/about',[HomeController::class,'about']);
    route::get('/blog',[HomeController::class,'blog']);
    route::get('/contact',[HomeController::class,'contact']);
    route::get('/fullrecipe',[HomeController::class,'fullrecipe'])->name('fullrecipe');
    route::get('/elements',[HomeController::class,'elements']);

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
        route::get('/info',[HomeController::class,'Info'])->name('info');
    });

    Route::controller(RecipeController::class)->group(function (){
        Route::get('/add-recipe','AddRecipe')->name('addrecipe');
        Route::post('/recipe/store-recipe','StoreRecipe')->name('storerecipe');

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


