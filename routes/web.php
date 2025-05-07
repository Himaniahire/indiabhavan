<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::controller(App\Http\Controllers\UserController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about_us', 'about')->name('about');
    Route::get('/contact_us', 'contact')->name('contact');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/i_take', 'itake')->name('itake');
    Route::get('/lunch', 'lunch')->name('lunch');
    Route::get('/m_menu', 'mmenu')->name('mmenu');
    Route::get('/menu', 'menu')->name('menu');
    Route::get('/reservation', 'reservation')->name('reservation');
    Route::post('/booking-table', 'bookingTable')->name('booking.table');
    Route::get('/reviews', 'reviews')->name('reviews');
    Route::post('/reviews-store', 'reviewStore')->name('reviews.store');
    Route::get('/take', 'take')->name('take');
    Route::post('sendmail', 'sendEmail')->name('sendmail');
    Route::post('sendcontactmail', 'sendContactEmail')->name('sendcontactmail');
});

Route::controller(App\Http\Controllers\LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
});


Route::group(['prefix' => '/admin'], function () {
    Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
        Route::post('userlogin', 'userlogin')->name('userlogin');
        Route::get('logout', 'logout')->name('logout');
        Route::get('/', 'index')->name('admin_home');
        
        Route::get('change_password', 'changePassword')->name('change_password');
        Route::post('password_change', 'passwordChange')->name('password-change');


        //Reservation
        Route::get('booking_details', 'bookingTable')->name('booking_details');
        Route::get('booking_detail_view/{id}', 'booking_detail_view')->name('booking_detail_view');
        Route::delete('booking_detail_destroy/{id}', 'destroy')->name('booking_detail_destroy');

        // Testimonial
        Route::get('testimonial_details', 'testimonialTable')->name('testimonial_details');
        Route::delete('testimonial_detail_destroy/{id}', 'testimonialDestroy')->name('testimonial_detail_destroy');
    });
    Route::resource('/holidays', \App\Http\Controllers\HolidayController::class);

});



