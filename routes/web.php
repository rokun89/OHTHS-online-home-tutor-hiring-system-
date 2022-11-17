<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\frontend\websiteHomeController;
use App\Http\Controllers\parentsController;
use App\Http\Controllers\paymentsController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\tutorsController;
use App\Http\Controllers\userController;
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

//( From here i'm using the Routing for Frontend ---->)

Route::get('/',[websiteHomeController::class,'webhome'])->name('web.home');


Route::get('/modal',[websiteHomeController::class,'modalTest'])->name('modal-url');








//( From here i'm using the Routing for backend ---->)


Route::get('/login',[userController::class,'login'])->name('login');
Route::post('/do-login',[userController::class,'doLogin'])->name('do.login');


//Route Group Given below==>>


Route::group(['middleware'=>'auth','prefix'=>'admin'],function() {
    Route::get('/logout',[userController::class,'logout'])->name('logout');
    

Route::get('/',[backendController::class,'home'])->name('base-url');
Route::get('/parents',[backendController::class,'parentsPage'])->name('parents-url');
Route::get('/students',[backendController::class,'studentsPage'])->name('students-url');
Route::get('/tutor',[backendController::class,'tutorPage'])->name('tutor-url');
Route::get('/tution',[backendController::class,'tutionPage'])->name('tution-url');
Route::get('/subject',[backendController::class,'subjectPage'])->name('subject-url');
Route::get('/service',[backendController::class,'servicePage'])->name('service-url');
Route::get('/contact',[backendController::class,'contactPage'])->name('contact-url');
Route::get('/about',[backendController::class,'aboutPage'])->name('about-url');



//parents form controller route

Route::get('/createpage',[parentsController::class,'createPage'])->name('create.page');

Route::post('/create/form',[parentsController::class,'store'])->name('category.store');



//students form route

Route::get('/createstdpage',[studentController::class,'stdPage'])->name('stdpage');

ROute::post('/std_form_fillup',[studentController::class,'std_store'])->name('std_storepage');



//tutor form route

Route::get('/tutor-form',[tutorsController::class,'tutorForm'])->name('tutor.form.page');
Route::post('/tutor-form-store',[tutorsController::class,'tutor_store'])->name('tutor.store.page');


//Payments form route

Route::get('/payments-form',[paymentsController::class,'payments_form_page'])->name('payments.form');
Route::post('/payments-form-store',[paymentsController::class,'payments_store'])->name('payments.store.page');



//students data view delete route
Route::get('/stdinfo/delete/{stdInfo}',[studentController::class,'deleteStdInfo'])->name('stdInfo.delete');
Route::get('/stdinfo/view/{viewstdInfo}',[studentController::class,'viewStdInfo'])->name('stdInfo.view');


});


