<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\frontend\websiteHomeController;
use App\Http\Controllers\parentsController;
use App\Http\Controllers\paymentsController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\tutionController;
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


//Become a tutor route:
Route::get('/tutor',[websiteHomeController::class,'tutor'])->name('tutor.url');
Route::post('/tutor/reg/submit',[websiteHomeController::class,'tutorReg'])->name('tutor.reg');
Route::post('/tutor/login',[websiteHomeController::class,'tutorlogin'])->name('tutor.login');


Route::group(['middleware'=>'auth'],function() {
    
    Route::get('/userProfile',[websiteHomeController::class,'userProfile'])->name('user.profile');
    Route::get('/userProfile/details',[websiteHomeController::class,'userProfileDetails'])->name('user.profile.details');
    Route::get('/userProfile/details/edit',[websiteHomeController::class,'user_Profile_edit'])->name('user.profile.edit.btn');

    Route::put('/usereupdate',[websiteHomeController::class,'UserUpdate'])->name('user.update');
    Route::get('/userlogout',[websiteHomeController::class,'userlogout'])->name('user.logout');

    //Tutor route
    Route::get('/tutorpage',[websiteHomeController::class,'tutorpage'])->name('tutor.page');
    Route::get('/tutorDetails',[websiteHomeController::class,'tutorDetails'])->name('tutor.details');
   

    //Tution Route
    Route::get('/tutionpage',[websiteHomeController::class,'TutionPage'])->name('tution.list');
    Route::get('/tution/details/page/{details}',[websiteHomeController::class,'tution_details'])->name('tution.details');
    Route::get('/FC/tution/details/page/{id}',[websiteHomeController::class,'fc_tution_details'])->name('fc.tution.details');
    Route::get('/tution/view/hire/page/{id}',[websiteHomeController::class,'Tution_hire'])->name('tution.hire');
    Route::post('/tution/studentInfoForm/{id}',[websiteHomeController::class,'stdInfoForm'])->name('tution.stdinfoForm');

    Route::get('/tutorHireReq/delete/{id}',[websiteHomeController::class,'hire_delete'])->name('tutor.hire.delete');
    Route::get('/byParents/tutor/hiringInfo/delete/{id}',[websiteHomeController::class,'parents_tutorHire_delete'])->name('parents.tutor.hire.delete');
    Route::get('/byParents/tutor/hiringInfo/edit/{id}',[websiteHomeController::class,'parents_tutorHire_edit'])->name('parents.hire.edit');
    Route::put('/byParents/tutor/hiringInfo/update/{id}',[websiteHomeController::class,'parents_tutorHire_update'])->name('parents.hire.update');

    //About page route
    Route::get('/about/me/page',[websiteHomeController::class,'aboutMe'])->name('about.me');


    //Payments route(pay fees)
    Route::get('/pay/fees',[paymentsController::class,'pay_fees'])->name('pay.fees');
    Route::post('/pay/fees/submit',[paymentsController::class,'fees_submit'])->name('fees.submit');


});




//Tutor Group and middleware
Route::group(['middleware'=>'tutor'],function(){

    Route::get('tutor/webpage',[websiteHomeController::class,'tutorweb'])->name('tutor.webpage');
    Route::get('/tutor/tuition/button',[websiteHomeController::class,'tuition_post'])->name('tuition.post');
    Route::post('/tuition/post/store',[websiteHomeController::class,'tuition_store'])->name('tuition.post.store');
    Route::get('/tuition/hiringInfo/delete/{id}',[websiteHomeController::class,'tuitionDelete'])->name('tuition.delete');
    Route::get('/tutor/tuitionInfo/delete/{id}',[websiteHomeController::class,'tutor_tuition_delete'])->name('tutor.tuition.delete');
    Route::get('/tutor/tuitionInfo/edit/{id}',[websiteHomeController::class,'tutor_tuition_edit'])->name('tutor.tuition.edit');
    Route::put('/tutor/tuitionInfo/update/{id}',[websiteHomeController::class,'tutor_tuition_update'])->name('tutor.tuition.update');
    Route::get('/tuition/status/update/{id}',[websiteHomeController::class,'status_update'])->name('status.update');
    Route::get('/tuition/status/delete/{id}',[websiteHomeController::class,'status_delete'])->name('status.delete');

    
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
    Route::get('/class',[backendController::class,'classpage'])->name('class-url');
    Route::get('/payments',[backendController::class,'paymentsPage'])->name('payments-url');

    //Report generation
    Route::get('/report',[backendController::class,'reportPage'])->name('contact-url');
    Route::get('/report/search',[backendController::class,'reportSearch'])->name('report.search');
    //Report Generation end

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

    //Tution form route
    Route::get('/tutor/form',[tutionController::class,'tutionForm'])->name('tution.form');
    Route::post('/tutor/form/store',[tutionController::class,'tution_form_store'])->name('tution.form.store');

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


    //Tution data view and delete and update
    Route::get('/tutioninfo/delete{tutionInfo}',[tutionController::class,'delete'])->name('tution.delete');
    Route::get('/tutioninfo/view/{tutionInfo}',[tutionController::class,'view'])->name('tution.view');
    Route::get('/tutioninfo/edit/{tutionInfo}',[tutionController::class,'edit'])->name('tution.edit');
    Route::put('/tutioninfo/update/{tutionInfo}',[tutionController::class,'update'])->name('tution.update');



    //class form route
    Route::get('/createClsPage',[studentController::class,'clsPage'])->name('cls.page');
    Route::post('/cls_form_fillup',[studentController::class,'cls_store'])->name('cls_storepage');
    Route::get('/cls/info/delete/{clsInfo}',[studentController::class,'cls_delete'])->name('cls.delete');

    //Tuition Post status update route (Update by Admin)
    Route::get('/tuitionPost/status/update/{id}',[tutionController::class,'tuition_post_status_update'])->name('tuition.post.status.update');
    Route::get('/tuitionPost/status/delete/{id}',[tutionController::class,'tuition_post_status_delete'])->name('tuition.post.status.delete');

});


