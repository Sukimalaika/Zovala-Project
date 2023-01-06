<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\County;
use App\Http\Livewire\SubCounty;
use App\Http\Livewire\Town;

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
      return view('test');
   // echo "<h1>Default Request</h1>";
});
Route::get('try', function () {
   return view('try');
// echo "<h1>Default Request</h1>";
});

//Roles routes
Route::get('roles',[RoleController::class,'all']);
Route::get('role/add',[RoleController::class,'add']);
Route::post('role/save',[RoleController::class,'save']);
Route::post('role/saveChanges/{id}',[RoleController::class,'saveChanges']);
Route::get('role/edit/{id}',[RoleController::class,'edit']);
Route::get('role/delete/{id}',[RoleController::class,'delete']);

//county
Route::get('counties',County::class);
Route::get('subcounties',SubCounty::class);
Route::get('towns',Town::class);
//subcounty
//towns
//users
Route::get('users',[RoleController::class,'all']);

