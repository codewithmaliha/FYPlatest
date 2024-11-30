<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\VehicleController;
use App\Http\Controllers\Backend\OrderController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/category/{slug}', [IndexController::class, 'postCategory']);
Route::get('/post-detail/{id}', [IndexController::class, 'postDetail']);
Route::get('/about-us', [IndexController::class, 'AboutUs']);
Route::get('/contact-us', [IndexController::class, 'ContactUs']);
Route::post('/contact-us', [IndexController::class, 'storeContactUs']);


// reviews routes
Route::post('/submit-reviews',[IndexController::class,'submitReviews']);

Route::post('/thank-you',[OrderController::class,'StoreClientInfo']);
Route::get('/thank-you',[OrderController::class,'ShowThankYouPage']);
// Route::post('/',[RentController::class,'create']);
// Route:: get('/thanku/{id}' , [IndexController::class, 'thankYou']);



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
        Route::get('/post-ads/{id}' ,[VehicleController::class,'updatePostAds']);
        Route::get('/create-post' ,[VehicleController::class,'showCreateAdPage']);
        Route::post('/store-ad',[VehicleController::class,'create']);
        Route::get('/edit-post/{id}' ,[VehicleController::class,'editPostAds']);
        Route::post('/edit-post/{id}' ,[VehicleController::class,'updatePostAds']);
        Route::get('/delete-post-ads/{id}',[AdminController::class,'deletePostAds']);
        Route::get('/order' ,[OrderController::class,'order']);
        Route::get('/delete-order/{id}',[OrderController::class,'deleteOrder']);
        Route::get('/status-change' ,[VehicleController::class,'statusChange']);
        Route::post('/status-change' ,[VehicleController::class,'statusChange']);

    });

});



