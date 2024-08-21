<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\VehicleController;
use App\Http\Controllers\Frontend\ServicesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great

*/

Route::get('/', [IndexController::class,'index'] );
Route::get('/post-category' , [IndexController::class, 'postCategory']);
Route::get('/post-detail' , [IndexController::class, 'postDetail']);
Route::get('/services',[ServicesController::class,'index']);
Route::get('/details/{id}',[ServicesController::class,'details']);


Route::get('/login',function(){
    if(Auth::user()){
        return redirect()->to('/admin/dashboard');
    }else{
        return redirect()->to('/admin/login');
    }
});



// Admin Routes

Route::prefix('/admin')->group(function () {

    // Login Routes
    Route::get('/login',[AdminController::class,'showLoginPage'])->name('login');
    Route::post('/verify-login',[AdminController::class,'verifyLoginInfo']);
    Route::get('/register',[AdminController::class,'showRegisterPage']);
    Route::post('/store-register-info',[AdminController::class,'storeRegisterInfo']);
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->to('/login');
    });



    // Admin Pages Routes
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard',[AdminController::class,'index']);
        Route::get('/contact-us',[AdminController::class,'contactUS']);
        Route::get('/delete-contact-us/{id}',[AdminController::class,'deleteContactUS']);

        Route::get('post-ads' ,[AdminController::class,'postAds']);
        Route::get('/create-post' ,[VehicleController::class,'showCreateAdPage']);
        Route::post('/store-ad',[VehicleController::class,'create']);
        Route::get('/edit-post/{id}' ,[VehicleController::class,'editPostAds']);
        Route::post('/edit-post/{id}' ,[VehicleController::class,'updatePostAds']);
        Route::get('/delete-post-ads/{id}',[AdminController::class,'deletePostAds']);
    });
   
});



