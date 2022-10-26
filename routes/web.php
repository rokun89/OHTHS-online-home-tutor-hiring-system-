<?php

use App\Http\Controllers\backendController;
use Illuminate\Support\Facades\Route;

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


//( From here i'm using the Routing for backend ---->)


Route::get('/',[backendController::class,'home']);
Route::get('/frontend',[backendController::class,'frontend']);


Route::get('/parents',[backendController::class,'parentsPage']);
Route::get('/students',[backendController::class,'studentsPage']);
Route::get('/tutor',[backendController::class,'tutorPage']);
Route::get('/tution',[backendController::class,'tutionPage']);
Route::get('/payments',[backendController::class,'paymentsPage']);
Route::get('/service',[backendController::class,'servicePage']);
Route::get('/contact',[backendController::class,'contactPage']);
Route::get('/about',[backendController::class,'aboutPage']);
