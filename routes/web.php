<?php

use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeCountroller;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//1-Do something in route

Route::get('/hello', function () {
    return 'Hello World';
});

//2-Call view in route

Route::get('/welcome', function () {
    return view('welcome');
});

//3-call controller function
Route::get('/',[HomeCountroller::class,'index'])->name('home');

//4-route->controller->view
Route::get('/test',[HomeCountroller::class,'test'])->name('test');

//5-Route with parameters
Route::get('/param/{id}/{number}',[HomeCountroller::class,'param'])->name('param');
//Route with post
Route::post('/save',[HomeCountroller::class,'save'])->name('save');


Route::middleware(['auth:sactun','verified'])->get('/dashboard',function (){
return view('dashbroad');
})->name('dashbroad');




//**************************************** ADMIN PANEL ROUTES  *************************************************//
Route::prefix('admin')->name('admin.')->group(function () {
 Route::get('/',[AdminHomeController::class,'index'])->name('index');


//**************************************** ADMIN CATEGORY ROUTES  *************************************************//
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
 Route::get('/','index')->name('index');
 Route::get('/create','create')->name('create');

 Route::post('/store','store')->name('store');

 Route::get('/edit/{id}','edit')->name('edit');
 Route::post('/update/{id}','update')->name('update');
 Route::get('/show/{id}','show')->name('show');
 Route::get('/delete/{id}','delete')->name('delete');

});

    //**************************************** ADMIN TREATMENT ROUTES  *************************************************//
    Route::prefix('/treatment')->name('treatment.')->controller(\App\Http\Controllers\AdminPanel\AdminTreatmentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');

        Route::post('/store','store')->name('store');

        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/delete/{id}','delete')->name('delete');

    });

    //**************************************** ADMIN TREATMENT IMAGE GALLERY ROUTES  *************************************************//
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{tid}','index')->name('index');

        Route::post('/store/{tid}','store')->name('store');
        Route::get('/edit/{tid}/{id}','edit')->name('edit');
        Route::post('/update/{tid}/{id}','update')->name('update');
        Route::get('/delete/{tid}/{id}','delete')->name('delete');

    });

});




