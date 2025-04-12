<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\api\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::controller(ApiController::class)->group(function(){
	Route::post('login','login');
});

Route::middleware('auth:sanctum')->group( function () {
    Route::controller(TaskController::class)->group(function(){
  	 	  Route::post('createtask','create');
  	   	Route::get('singletask/{id}','singletask');
  	 	  Route::get('tasks','tasks');
  	   	Route::delete('taskdelete/{id}','taskdelete');
        Route::post('taskupdate/{id}','update');
        Route::get('taskbystatus/{status}','taskbystatus');
        Route::post('logout','logout');
    });

});
