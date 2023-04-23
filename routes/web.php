<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('student-list',[UsersController::class,'index']);
Route::get('add-student',[UsersController::class,'addStudent']);
Route::post('save-student',[UsersController::class,'saveStudent']);
Route::post('edit-student/{id}',[UsersController::class,'editStudent']);