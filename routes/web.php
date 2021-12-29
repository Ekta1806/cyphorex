<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']],function(){
	Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name("admin.dashboard");
	Route::get('home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
	Route::get('profile', [App\Http\Controllers\AdminController::class, 'profile'])->name("admin.profile");
	Route::get('setting', [App\Http\Controllers\AdminController::class, 'setting'])->name("admin.setting");
	Route::get('users', [App\Http\Controllers\VehicleController::class, 'index'])->name('users.index');
	Route::get('vehicle_cat/{id}', [App\Http\Controllers\VehicleController::class, 'vehicleCat'])->name('vehical_cat');
	Route::post('vehicle_cat/bookingForm/bookingFormSubmit/{id}', [App\Http\Controllers\VehicleController::class, 'bookingFormSubmit'])->name('bookingFormSubmit');
	Route::get('vehicle_cat/bookingForm/{id}', [App\Http\Controllers\VehicleController::class, 'bookingForm']);
	Route::get('/addcategory', function () {
    return view('addcategory');
	});
	Route::post('addcategorySubmit', [App\Http\Controllers\VehicleController::class, 'addcategorySubmit'])->name('addcategorySubmit');

	Route::get('/addsubcategory', function () {
    return view('addsubcategory');
	});
	Route::post('addsubcategorySubmit', [App\Http\Controllers\VehicleController::class, 'addsubcategorySubmit'])->name('addsubcategorySubmit');

});

Route::group(['prefix'=>'user','middleware'=>['isUser','auth']],function(){
	Route::get('dashboard', [App\Http\Controllers\UserController::class, 'index'])->name("user.dashboard");
	Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
	Route::get('profile', [App\Http\Controllers\UserController::class, 'profile'])->name("user.profile");
	Route::get('setting', [App\Http\Controllers\UserController::class, 'setting'])->name("user.setting");
	Route::get('users', [App\Http\Controllers\VehicleController::class, 'index'])->name('users.index');
	Route::get('vehicle_cat/{id}', [App\Http\Controllers\VehicleController::class, 'vehicleCat'])->name('vehical_cat');
	Route::post('vehicle_cat/bookingForm/bookingFormSubmit/{id}', [App\Http\Controllers\VehicleController::class, 'bookingFormSubmit'])->name('bookingFormSubmit');
	Route::get('vehicle_cat/bookingForm/{id}', [App\Http\Controllers\VehicleController::class, 'bookingForm']);
	
});

// Route::group(['prefix'=>'superAdmin','middleware'=>['isSuperAdmin','auth']],function(){
// 	Route::get('dashboard', [App\Http\Controllers\UserController::class, 'index'])->name("user.dashboard");
// 	Route::get('home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
// 	Route::get('profile', [App\Http\Controllers\UserController::class, 'profile'])->name("user.profile");
// 	Route::get('setting', [App\Http\Controllers\UserController::class, 'setting'])->name("user.setting");
// 	Route::get('users', [App\Http\Controllers\VehicleController::class, 'index'])->name('users.index');
// 	Route::get('vehicle_cat/{id}', [App\Http\Controllers\VehicleController::class, 'vehicleCat'])->name('vehical_cat');
// 	Route::post('vehicle_cat/bookingForm/bookingFormSubmit/{id}', [App\Http\Controllers\VehicleController::class, 'bookingFormSubmit'])->name('bookingFormSubmit');
// 	Route::get('vehicle_cat/bookingForm/{id}', [App\Http\Controllers\VehicleController::class, 'bookingForm']);
// });