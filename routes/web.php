<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\GoogleCalendarController;

// Route::get('/google/redirect', [GoogleCalendarController::class, 'redirectToGoogle'])->name('google.redirect');
// Route::get('/google/callback', [GoogleCalendarController::class, 'handleGoogleCallback'])->name('google.callback');
// Route::post('/appointments/{id}/link-to-google-calendar', [GoogleCalendarController::class, 'linkToGoogleCalendar'])->name('appointments.linkToGoogleCalendar');


Route::get('/', [AdminController::class,'home']);




route::get('/home',[AdminController::class,'index'])->name('home');


Route::get('/create_booking', [AdminController::class,'create_booking']);

Route::post('/add_booking', [AdminController::class,'add_booking']);

Route::get('/view_booking', [AdminController::class,'view_booking']);

Route::get('/booking_delete/{id}', [AdminController::class,'booking_delete']);

Route::get('/booking_update/{id}', [AdminController::class,'booking_update']);

Route::post('/edit_booking/{id}', [AdminController::class,'edit_booking']);


Route::get('/report', [AdminController::class,'report']);

Route::post('/add_report', [AdminController::class,'add_report']);

Route::get('/view_report', [AdminController::class,'view_report']);

Route::get('/report_delete/{id}', [AdminController::class,'report_delete']);

Route::get('/report_update/{id}', [AdminController::class,'report_update']);

Route::post('/edit_report/{id}', [AdminController::class,'edit_report']);


Route::get('/book_details/{id}', [HomeController::class,'book_details']);

Route::post('/add_appointment/{id}', [HomeController::class,'add_appointment']);


Route::get('/appointments', [AdminController::class,'appointments'])->middleware(['auth','admin']);

Route::get('/delete_appointment/{id}', [AdminController::class,'delete_appointment']);

Route::get('/approve_appointment/{id}', [AdminController::class,'approve_appointment']);

Route::get('/rejected_appointment/{id}', [AdminController::class,'rejected_appointment']);

Route::get('/view_gallary', [AdminController::class,'view_gallary']);

Route::post('/upload_gallary', [AdminController::class,'upload_gallary']);

Route::get('/delete_gallary/{id}', [AdminController::class,'delete_gallary']);

Route::post('/contact', [HomeController::class,'contact']);

Route::get('/all_messages', [AdminController::class,'all_messages']);

Route::get('/send_mail/{id}', [AdminController::class,'send_mail']);

Route::post('/mail/{id}', [AdminController::class,'mail']);

Route::get('/contact_us', [HomeController::class,'contact_us']);

Route::get('/my_bookings', [HomeController::class, 'my_bookings'])->middleware(['auth']);

Route::get('/calendar', [HomeController::class,'calendar'])->name('calendar.index');

Route::get('/reminder', [AdminController::class,'reminder']);

Route::get('/about_us', [HomeController::class,'about_us']);
