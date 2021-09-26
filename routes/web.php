<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RegistrationController;



Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');


})->name('dashboard');


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
Route::get('/add',[RegistrationController::class,'registryAdd'])->name('registry.add');
Route::post('/store',[RegistrationController::class,'registryStore'])->name('registry.store');
Route::get('/edit/{id}',[RegistrationController::class,'registryEdit'])->name('registry.edit');
Route::post('/update/{id}',[RegistrationController::class,'registryUpdate'])->name('registry.update');
Route::get('/delete/{id}',[RegistrationController::class,'registryDelete'])->name('registry.delete');

});

