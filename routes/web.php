<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

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

Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('logincheck',[AuthController::class,'logincheck'])->name('auth.logincheck');
Route::post('/',[AuthController::class,'logout'])->name('logout');

Route::group(['middleware' =>'auth'],function(){
	Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
	Route::get('create',[TaskController::class,'create'])->name('task.create');
	Route::post('store',[TaskController::class,'store'])->name('task.store');
	Route::get('task',[TaskController::class,'index'])->name('task.index');	
	Route::get('show/{id}',[TaskController::class,'show'])->name('task.show');
	Route::delete('delete/{id}',[TaskController::class,'delete'])
	->name('task.delete');
	Route::get('edit/{id}',[TaskController::class,'edit'])->name('task.edit');
	Route::post('update/{id}',[TaskController::class,'update'])->name('task.update');				
});