<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\CelebrityController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\SubPersonController;
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

Route::get('/', [EnrollController::class,'getAll']);

Route::get('register', [UserController::class, 'showRegister'])->name('getRegister');
Route::post('register', [UserController::class, 'register'])->name('register');

Route::get('enrollment', [EnrollController::class, 'showEnrollment'])->name('getEnrollment');
Route::post('enrollment', [EnrollController::class, 'enrollment'])->name('enroll');

Route::get('login', [UserController::class, 'showLogin'])->name('getLogin');
Route::post('login', [UserController::class, 'login'])->name('login');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('celebrity/artists', [EnrollController::class, 'celArtist'])->name('getArtists');
Route::get('celebrity/actors', [EnrollController::class, 'celActor'])->name('getActors');
Route::get('celebrity/singers', [EnrollController::class, 'celSinger'])->name('getSingers');
Route::get('celebrity/athletes', [EnrollController::class, 'celAthlete'])->name('getAthletes');

Route::post('/subscribe/user',[SubPersonController::class,'subscribeLogin']);
Route::post('/subscribe-user',[SubPersonController::class,'subscribeRegister']);

Route::middleware('userauth')->group(function () {        
 
    Route::get('/dashboard/profile', function () {
        return view('website.profile');
    });
    Route::post('/dashboard/profile',[CelebrityController::class,'profileImage'])->name('profileimg.prof');
    Route::get('/request/form/{id}',[OrderHistoryController::class,'getRequestForm'])->name('req.form');
    Route::post('/request/form',[OrderHistoryController::class,'requestForm'])->name('req.submit');
    Route::get('/request/details',[EnrollController::class,'reqDetails'])->name('request.details'); 
    Route::get('/video/public',function() {
        return view('website.public-videos');
    });
    Route::post('/public/video/share',[CelebrityController::class,'videoAll'])->name('video.all');
    Route::post('/dashboard/celebrity-profile/video/share',[CelebrityController::class,'videoClient'])->name('video.client');
    Route::get('/payment-now',[PaymentController::class,'proceed'])->name('payment.now');
    Route::post('/payment-now',[PaymentController::class,'proceedToPayment'])->name('done.pay');
    Route::get('/congratulations', function () {
        return view('website.congratulations');
    });
    Route::match(['get', 'post'], '/stripe', [PaymentController::class,'stripe']); 
});
Route::middleware('starauth')->group(function () {
    Route::get('/dashboard/celebrity-profile',[CelebrityController::class,'profile'])->name('celebrity.profile');
    Route::post('/dashboard/celebrity-profile',[CelebrityController::class,'profileImg'])->name('profileimg');

});
Route::get('/celebrity/details/{id}', function ($id) {
    $show = \Illuminate\Support\Facades\DB::table('enrolls')
    ->join('user_images', 'enrolls.id', '=', 'user_images.enroll_id')
    ->select('enrolls.*', 'user_images.profile_img')
    ->where('user_images.enroll_id',$id)
    ->where('enrolls.id',$id)
    ->first();
    $images = \Illuminate\Support\Facades\DB::table('video_to_all')->get();
    return view('website.celebrity-details',compact('images','show'));
})->name('celebrity.details');
Route::get('login/facebook', [UserController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [UserController::class, 'handleFacebookCallback']);
// Route::get('login/facebook', [UserController::class, 'redirectToProvider']);
// Route::get('login/facebook/callback', [UserController::class, 'handleProviderCallback']);