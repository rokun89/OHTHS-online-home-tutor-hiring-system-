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


Route::get('/frontend',[backendController::class,'frontend']);



Route::get('/',[backendController::class,'home'])->name('base-url');
Route::get('/parents',[backendController::class,'parentsPage'])->name('parents-url');
Route::get('/students',[backendController::class,'studentsPage'])->name('students-url');
Route::get('/tutor',[backendController::class,'tutorPage'])->name('tutor-url');
Route::get('/tution',[backendController::class,'tutionPage'])->name('tution-url');
Route::get('/payments',[backendController::class,'paymentsPage'])->name('payment-url');
Route::get('/service',[backendController::class,'servicePage'])->name('service-url');
Route::get('/contact',[backendController::class,'contactPage'])->name('contact-url');
Route::get('/about',[backendController::class,'aboutPage'])->name('about-url');
