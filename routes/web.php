<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SubMainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
    return view('login');
})->middleware('AfterLogin');

Route::get('/header', [FrontEndController::class, 'header'])->name('header');
Route::get('/adminheader', [FrontEndController::class, 'adminheader'])->name('adminheader');
Route::get('/footer', [FrontEndController::class, 'footer'])->name('footer');
// Route::get('/doctor_profile_setting', [FrontEndController::class, 'doctor_profile_setting'])->name('doctor_profile_setting');

Route::get('/appointment_list/{d_id}', [FrontEndController::class, 'appointment'])->name('appointment_list');
Route::get('/index', [FrontEndController::class, 'index'])->name('index');
Route::get('/loginForm', [FrontEndController::class, 'loginForm'])->name('loginForm');
Route::get('/patient', [FrontEndController::class, 'patient'])->name('patient');
Route::get('/prescription_list', [FrontEndController::class, 'prescription_list'])->name('prescription_list');
// Route::get('/treatment_plan', [FrontEndController::class, 'treatment_plan'])->name('treatment_plan');
Route::get('/treatmentPlans', [FrontEndController::class, 'treatmentPlans'])->name('treatmentPlans');


// Route::get('/prescription', [FrontEndController::class, 'prescription'])->name('prescription');
// Route::get('/invoice', [FrontEndController::class, 'invoice'])->name('invoice');
// Route::get('/subscription', [FrontEndController::class, 'subscription'])->name('subscription');
// Route::get('/admin_page', [FrontEndController::class, 'admin_page'])->name('admin_page');
// Route::get('/profile_edit', [FrontEndController::class, 'profile_edit'])->name('profile_edit');
// Route::get('/registration', [FrontEndController::class, 'registration'])->name('registration');
// Route::get('/login', [FrontEndController::class, 'login'])->name('login');


// AuthController

Route::get('/registration', [AuthController::class, 'registration'])->name('registration')->middleware('AfterLogin');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('AfterLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/doctor', [AuthController::class, 'doctor'])->name('doctor')->middleware('NotLogin');
Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user')->middleware('SubCheck');
Route::post('/register_user', [AuthController::class, 'register_user'])->name('register_user');
Route::get('/doctor/profile_edit/{id}', [AuthController::class, 'profile_edit'])->name('profile_edit');
Route::get('/login_profile_edit/{id}', [AuthController::class, 'login_profile_edit'])->name('login_profile_edit');
Route::put('/update/doctor/{id}',[AuthController::class,'update_doctor'])->name('update.doctor');
Route::put('/login_update/doctor/{id}',[AuthController::class,'login_update_doctor'])->name('login_update_doctor');
// Route::post('/search',[AuthController::class,'search'])->name('search');
Route::get('/subscription/{d_id}', [AuthController::class, 'subscription'])->name('subscription');
Route::get('/subscription_info/{id}', [AuthController::class, 'subscription_info']);
Route::put('/subscription_add', [AuthController::class, 'subscription_add'])->name('subscription_add');
Route::put('/subscription_add_redeem', [AuthController::class, 'subscription_add_redeem'])->name('subscription_add_redeem');





//patient MainController
Route::get('/patient_appoinment/{id}',[MainController::class,'patient_appoinment'])->name('patient_appoinment');
Route::put('/appointment',[MainController::class,'appointment'])->name('appointment');
Route::get('/edit_appointment/{id}', [MainController::class, 'edit_appointment']);
Route::put('/update_appointment', [MainController::class, 'update_appointment'])->name('update_appointment');
Route::delete('/delete_appointment', [MainController::class, 'delete_appointment'])->name('delete_appointment');

Route::put('/next_appointment',[MainController::class,'next_appointment'])->name('next_appointment');


Route::get('/patient_list/{id}',[MainController::class,'patient_list'])->name('patient_list');
Route::post('/new/patient/{id}',[MainController::class,'patient_info'])->name('patient_info');
Route::put('edit/patient/{d_id}/{p_id}',[MainController::class,'edit_patient'])->name('edit.patient');
Route::delete('delete/patient/{d_id}/{p_id}',[MainController::class,'delete_patient'])->name('delete.patient');

// edit patient info from patient list
Route::get('/edit_patient/{id}', [MainController::class, 'edit_patient_list']);
Route::put('/update_patient', [MainController::class, 'update_patient_list'])->name('update_patient_list');
Route::delete('/delete_patient', [MainController::class, 'delete_patient_list'])->name('delete_patient_list');


//search patient
Route::post('/search/{id}',[MainController::class,'search'])->name('search');
//view_patient
Route::put('/update/patient/{id}',[MainController::class,'update_patient'])->name('update_patient');
Route::get('/view/patient/{d_id}/{p_id}',[MainController::class,'view_patient'])->name('view_patient'); //view
Route::post('/view/patient/{d_id}/{p_id}',[MainController::class,'treatment_info'])->name('treatment_info');

Route::get('/view/patient/treatment/{d_id}/{p_id}/{t_id}/{t_plans}',[MainController::class,'treatments'])->name('treatments');
// Route::post('/view/patient/treatment/{p_id}/{t_id}/{t_plans}',[MainController::class,'treatments'])->name('treatments');

Route::get('/view/patient/prescription/{d_id}/{p_id}',[MainController::class,'prescription'])->name('prescription');
Route::get('/view_prescription/{d_id}/{p_id}',[MainController::class,'view_prescription'])->name('view_prescription');
Route::post('/patient/prescription/drug/{d_id}/{p_id}',[MainController::class,'add_drug'])->name('add_drug');
Route::get('/edit_drug/{id}', [MainController::class, 'edit_drug']);
Route::put('/update_drug', [MainController::class, 'update_drug'])->name('update_drug');
Route::delete('/delete_drug', [MainController::class, 'delete_drug'])->name('delete_drug');
Route::post('/prescription_add/{d_id}', [MainController::class, 'prescription_add'])->name('prescription_add');
// Route::post('/prescription_add/{d_id}/{t_id}/{t_plans}', [MainController::class, 'prescription_add'])->name('prescription_add');
Route::delete('/prescription_delete', [MainController::class, 'prescription_delete'])->name('prescription_delete');

Route::get('/get_drug_info/{p_id}', [MainController::class, 'get_drug_info']);
Route::get('/invoice/{d_id}/{p_id}', [MainController::class, 'invoice'])->name('invoice');
Route::put('/treatment_payment', [MainController::class, 'treatment_payment'])->name('treatment_payment');
Route::put('/treatment_discount', [MainController::class, 'treatment_discount'])->name('treatment_discount');

Route::post('/treatment_steps/{d_id}/{p_id}/{t_id}', [MainController::class, 'treatment_steps'])->name('treatment_steps');
Route::get('/ot_notes/{id}', [MainController::class, 'ot_notes']);
Route::put('/update_ot', [MainController::class, 'update_ot'])->name('update_ot');
Route::delete('/delete_ot', [MainController::class, 'delete_ot'])->name('delete_ot');


Route::post('/report/{d_id}/{p_id}/{t_id}', [MainController::class, 'report'])->name('report');
Route::delete('/report_delete', [MainController::class, 'report_delete'])->name('report_delete');



// SubMainController

Route::get('/doctor_profile_setting/{d_id}', [SubMainController::class, 'doctor_profile_setting'])->name('doctor_profile_setting');
Route::post('/doctor_chamber', [SubMainController::class, 'doctor_chember'])->name('doctor_chember');
Route::get('/edit_chamber/{id}', [SubMainController::class, 'edit_chember']);
Route::put('/update_chamber', [SubMainController::class, 'update_chember'])->name('update_chember');
Route::delete('/delete_chamber', [SubMainController::class, 'delete_chember'])->name('delete_chember');

Route::post('/chamber_schedule', [SubMainController::class, 'chember_schedule'])->name('chember_schedule');


Route::post('/add_favourite', [SubMainController::class, 'add_favourite'])->name('add_favourite');
Route::get('/edit_favourite/{id}', [SubMainController::class, 'edit_favourite']);
Route::put('/update_favourite', [SubMainController::class, 'update_favourite'])->name('update_favourite');

Route::post('/add_barcode', [SubMainController::class, 'add_barcode'])->name('add_barcode');
Route::put('/update_barcode', [SubMainController::class, 'update_barcode'])->name('update_barcode');





Route::post('/chife_complaint', [SubMainController::class, 'chife_complaint'])->name('chife_complaint');
Route::get('/edit_chife_complaint/{id}', [SubMainController::class, 'edit_chife_complaint']);
Route::put('/update_chife_complaint', [SubMainController::class, 'update_chife_complaint'])->name('update_chife_complaint');
Route::delete('/delete_chife_complaint', [SubMainController::class, 'delete_chife_complaint'])->name('delete_chife_complaint');

Route::post('/clinical_finding', [SubMainController::class, 'clinical_finding'])->name('clinical_finding');
Route::get('/edit_clinical_finding/{id}', [SubMainController::class, 'edit_clinical_finding']);
Route::put('/update_clinical_finding', [SubMainController::class, 'update_clinical_finding'])->name('update_clinical_finding');
Route::delete('/delete_clinical_finding', [SubMainController::class, 'delete_clinical_finding'])->name('delete_clinical_finding');

Route::post('/investigation', [SubMainController::class, 'investigation'])->name('investigation');
Route::get('/edit_investigation/{id}', [SubMainController::class, 'edit_investigation']);
Route::put('/update_investigation', [SubMainController::class, 'update_investigation'])->name('update_investigation');
Route::delete('/delete_investigation', [SubMainController::class, 'delete_investigation'])->name('delete_investigation');

Route::post('/treatment_plan', [SubMainController::class, 'treatment_plan'])->name('treatment_plan');
Route::get('/edit_treatment_plan/{id}', [SubMainController::class, 'edit_treatment_plan']);
Route::put('/update_treatment_plan', [SubMainController::class, 'update_treatment_plan'])->name('update_treatment_plan');
Route::delete('/delete_treatment_plan', [SubMainController::class, 'delete_treatment_plan'])->name('delete_treatment_plan');

Route::post('/treatment_cost', [SubMainController::class, 'treatment_cost'])->name('treatment_cost');
Route::get('/edit_treatment_cost/{id}', [SubMainController::class, 'edit_treatment_cost']);
Route::put('/update_treatment_cost', [SubMainController::class, 'update_treatment_cost'])->name('update_treatment_cost');
Route::delete('/delete_treatment_cost', [SubMainController::class, 'delete_treatment_cost'])->name('delete_treatment_cost');

Route::post('/medicine_add', [SubMainController::class, 'medicine_add'])->name('medicine_add');
Route::get('/edit_medicine/{id}', [SubMainController::class, 'edit_medicine']);
Route::put('/update_medicine', [SubMainController::class, 'update_medicine'])->name('update_medicine');
Route::delete('/delete_medicine', [SubMainController::class, 'delete_medicine'])->name('delete_medicine');

// AdminController

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::post('/doctor_add', [AdminController::class, 'doctor_add'])->name('doctor_add');
Route::get('/edit_doctor/{id}', [AdminController::class, 'edit_doctor']);
Route::put('/update_doctor', [AdminController::class, 'update_doctor'])->name('update_doctor');
Route::delete('/delete_doctor', [AdminController::class, 'delete_doctor'])->name('delete_doctor');
Route::get('/doctor_status/{id}', [AdminController::class, 'doctor_status'])->name('doctor_status');
Route::get('/doctor_verification/{id}', [AdminController::class, 'doctor_verification'])->name('doctor_verification');
Route::post('/redeem_add', [AdminController::class, 'redeem_add'])->name('redeem_add');
Route::get('/redeem_status/{id}', [AdminController::class, 'redeem_status'])->name('redeem_status');
Route::delete('/delete_redeem', [AdminController::class, 'delete_redeem'])->name('delete_redeem');
Route::get('/subscription_status/{id}', [AdminController::class, 'subscription_status'])->name('subscription_status');
Route::delete('/delete_subscription', [AdminController::class, 'delete_subscription'])->name('delete_subscription');
Route::post('/notice_add', [AdminController::class, 'notice_add'])->name('notice_add');
Route::get('/notice_status/{id}', [AdminController::class, 'notice_status'])->name('notice_status');
Route::get('/notice_edit/{id}', [AdminController::class, 'notice_edit']);
Route::put('/notice_update', [AdminController::class, 'notice_update'])->name('notice_update');
Route::delete('/notice_delete', [AdminController::class, 'notice_delete'])->name('notice_delete');






// Route::post('/admin/medicine_add', [AdminController::class, 'medicine_add'])->name('medicine_add');

// Route::put('/admin/update_medicine', [AdminController::class, 'update_medicine'])->name('update_medicine');
// Route::delete('/admin/delete_medicine', [AdminController::class, 'delete_medicine'])->name('delete_medicine');

Route::get('/send_mail/{d_id}/{p_id}',[MainController::class, 'sendMailWithPdf'])->name('send_mail');
Route::get('/action/{d_id}/{mobile}',[FrontEndController::class, 'action'])->name('action');
Route::get('/action2/{id}',[FrontEndController::class, 'action2'])->name('action2');
