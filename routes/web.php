<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
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
    route::get('/receip',[HomeController::class,'receip']);
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


        route::get('/recipe',[HomeController::class,'recipe'])->name('recipe');
        route::get('/out',[HomeController::class,'out'])->name('out');
        route::get('/info',[HomeController::class,'Info'])->name('info');
    });

});

Route::middleware(['auth', 'role:admin|manager'])->group(function (){
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/admin/dashboard','Index')->name('home');
    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


