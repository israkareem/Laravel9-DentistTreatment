<?php

use App\Http\Controllers\AdminPanel\AdminTreatmentController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
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


//**************************************** HOME PAGE ROUTES  *************************************************//
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');
Route::view('/loginuser','home.login');
Route::view('/registeruser','home.register');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin','admin.login');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');





//4-route->controller->view
Route::get('/test',[HomeController::class,'test'])->name('test');

//5-Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');
//6-Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::get('/treatment/{id}',[HomeController::class,'treatment'])->name('treatment');
Route::get('/categorytreatments/{id}/{slug}',[HomeController::class,'categorytreatments'])->name('categorytreatments');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function (){
return view('dashboard');
})->name('dashboard');




//**************************************** ADMIN PANEL ROUTES  *************************************************//
Route::prefix('admin')->name('admin.')->group(function () {
 Route::get('/',[AdminHomeController::class,'index'])->name('index');
//**************************************** GENERAL Routes ROUTES  *************************************************//

    Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
    Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name('setting.update');

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
    Route::prefix('/treatment')->name('treatment.')->controller(AdminTreatmentController::class)->group(function () {
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

    //**************************************** ADMIN MESSAGE ROUTES  *************************************************//
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');

        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','delete')->name('delete');

    });
    //**************************************** ADMIN FAQ ROUTES  *************************************************//
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');

        Route::post('/store','store')->name('store');

        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/delete/{id}','delete')->name('delete');

    });

    //**************************************** ADMIN COMMENT ROUTES  *************************************************//
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');

        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','delete')->name('delete');

    });
});




