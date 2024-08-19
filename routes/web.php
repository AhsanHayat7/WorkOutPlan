<?php

use App\Http\Controllers\WorkoutController;
use App\Models\Workoutplan;
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
Route::group(['middleware' => 'auth'], function () {
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::get('/workout',[WorkoutController::class, 'index'])->name('workout');

Route::get('/workout/create',[WorkoutController::class, 'create'])->name('workout.create');
Route::post('/workout/store',[WorkoutController::class, 'store'])->name('workout.store');
Route::get('/workout/edit/{id}',[WorkoutController::class, 'edit'])->name('workout.edit');
Route::post('/workout/update/{id}',[WorkoutController::class, 'update'])->name('workout.update');
Route::get('/workout/delete/{id}',[WorkoutController::class, 'destroy'])->name('workout.delete');


});


