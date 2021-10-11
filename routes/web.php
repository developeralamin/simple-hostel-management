<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminLogoutController;





Route::group(['middleware' => 'prevent-back-history'],function(){



Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  
 // Route::get('/admin/view',[DashboardController::class,'AdminView']);
  return view('admin.index'); 

})->name('dashboard');




Route::get('/admin/logout',[AdminLogoutController::class,'Logout'])->name('admin.logout');

Route::group(['middleware' => 'auth'],function(){


Route::prefix('profile')->group(function (){

Route::get('/view',[ProfileController::class,'ViewProfile'])->name('profile.view');
Route::get('/edit',[ProfileController::class,'EditProfile'])->name('profile.edit');
Route::post('/store',[ProfileController::class,'StoreProfile'])->name('profile.store');
Route::get('/password/view',[ProfileController::class,'PasswordView'])->name('password.view');
Route::post('/password/update',[ProfileController::class,'PasswordUpdate'])->name('passwrd.update');

});

Route::prefix('course')->group(function (){

Route::get('/view',[CourseController::class,'CoureView'])->name('course.view');
Route::get('/add',[CourseController::class,'CoureAdd'])->name('course.add');
Route::post('/store',[CourseController::class,'CoureStore'])->name('course.store');
Route::get('/edit/{id}',[CourseController::class,'CoureEdit'])->name('course.edit');
Route::post('/update/{id}',[CourseController::class,'CoureUpdate'])->name('course.update');
Route::get('/delete/{id}',[CourseController::class,'CoureDelete'])->name('course.delete');

});


Route::prefix('rooms')->group(function (){

Route::get('/view',[RoomController::class,'RoomsView'])->name('rooms.view');
Route::get('/add',[RoomController::class,'RoomsAdd'])->name('rooms.add');
Route::post('/store',[RoomController::class,'RoomsStore'])->name('rooms.store');
Route::get('/edit/{id}',[RoomController::class,'RoomsEdit'])->name('rooms.edit');
Route::post('/update/{id}',[RoomController::class,'RoomsUpdate'])->name('rooms.update');
Route::get('/delete/{id}',[RoomController::class,'RoomsDelete'])->name('rooms.delete');

});


Route::prefix('registry')->group(function (){

Route::get('/view',[RegistrationController::class,'registryView'])->name('registry.view');
Route::get('/findPrice',[RegistrationController::class,'findPrice'])->name('findPrice');
Route::get('/add',[RegistrationController::class,'registryAdd'])->name('registry.add');
Route::post('/store',[RegistrationController::class,'registryStore'])->name('registry.store');
Route::get('/edit/{id}',[RegistrationController::class,'registryEdit'])->name('registry.edit');
Route::post('/update/{id}',[RegistrationController::class,'registryUpdate'])->name('registry.update');
Route::get('/delete/{id}',[RegistrationController::class,'registryDelete'])->name('registry.delete');

});



});
//middleware

});