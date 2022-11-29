<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\frontend\websiteHomeController;
use App\Http\Controllers\parentsController;
use App\Http\Controllers\paymentsController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\subjectController;
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
Route::post('/registration',[websiteHomeController::class,'registration'])->name('registration');
Route::post('/userlogin',[websiteHomeController::class,'userlogin'])->name('userlogin');


Route::group(['middleware'=>'auth'],function() {
    
    Route::get('/userProfile',[websiteHomeController::class,'userProfile'])->name('user.profile');
    Route::put('/usereupdate',[websiteHomeController::class,'UserUpdate'])->name('user.update');
    Route::get('/userlogout',[websiteHomeController::class,'userlogout'])->name('user.logout');
    Route::get('/tutor',[websiteHomeController::class,'tutor'])->name('tutor.url');



});













//( From here i'm using the Routing for backend ---->)


Route::get('/login',[userController::class,'login'])->name('login');
Route::post('/do-login',[userController::class,'doLogin'])->name('do.login');


//Route Group Given below==>>


Route::group(['middleware'=>['auth','admin'],'prefix'=>'admin'],function() {

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



    //Subject form route
    Route::get('/subject-form',[subjectController::class,'subjectForm'])->name('subject.form.page');
    Route::post('/subject-form-store',[subjectController::class,'subjectStore'])->name('subject.store.page');


    //Payments form route

    Route::get('/payments-form',[paymentsController::class,'payments_form_page'])->name('payments.form');
    Route::post('/payments-form-store',[paymentsController::class,'payments_store'])->name('payments.store.page');





    //students data view delete route
    Route::get('/stdinfo/delete/{stdInfo}',[studentController::class,'deleteStdInfo'])->name('stdInfo.delete');
    Route::get('/stdinfo/view/{viewstdInfo}',[studentController::class,'viewStdInfo'])->name('stdInfo.view');
    Route::get('/stdinfo/edit/{editstdInfo}',[studentController::class,'edit'])->name('students.edit');
    Route::put('/stdinfo/update/{updateInfo}',[studentController::class,'update'])->name('students.update');




    //parents data view delete update route
    Route::get('/parentsinfo/delete/{parentsInfo}',[parentsController::class,'deleteparentsInfo'])->name('parentsInfo.delete');
    Route::get('/parentsinfo/view/{parentsInfo}',[parentsController::class,'viewparentsInfo'])->name('parentsInfo.view');
    Route::get('/parentsinfo/edit/{parentsInfo}',[parentsController::class,'edit'])->name('parents.edit');
    Route::put('/parentsinfo/update/{parentsInfo}',[parentsController::class,'update'])->name('parents.update');





    //tutor data view and delete route
    Route::get('/tutorinfo/delete/{tutorInfo}',[tutorsController::class,'deleteTutorInfo'])->name('delete.tutorInfo');
    Route::get('/tutorinfo/view/{tutorInfo}',[tutorsController::class,'viewtutorInfo'])->name('view.tutorInfo');
    Route::get('/tutorinfo/edit/{tutorInfo}',[tutorsController::class,'edit'])->name('tutor.edit');
    Route::put('/tutorinfo/update/{tutorInfo}',[tutorsController::class,'update'])->name('tutor.update');



    //subject data view and delete and update
    Route::get('/subjectinfo/delete/{subjectInfo}',[subjectController::class,'delete'])->name('delete.info');
    Route::get('/subjectinfo/view/{subjectInfo}',[subjectController::class,'view'])->name('view.info');
    Route::get('/subjectinfo/edit/{subjectInfo}',[subjectController::class,'edit'])->name('edit.info');
    Route::put('/subjectinfo/update/{subjectInfo}',[subjectController::class,'update'])->name('update.info');




});


