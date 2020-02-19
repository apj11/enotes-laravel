<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/','Frontend\IndexController');
Route::resource('abouts','Frontend\AboutController');
Route::resource('contacts','Frontend\ContactController');
Route::resource('programs','Frontend\ProgramController');
Route::resource('/programfile','Frontend\ProgramfileController');


    Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/admin','HomeController@index')->name('home');

//    Route::resource('/about','Admin\AboutController');
//    Route::get('/about/delete/{id}','Admin\AboutController@destroy')->name('about.destroy');
//
//    Route::resource('/slider','Admin\SliderController');
//    Route::resource('/service','Admin\ServiceController');
//    Route::resource('/social','Admin\SocialController');
//
//    Route::resource('/gallery','Admin\GalleryController');
//    Route::get('/gallery/delete/{id}','Admin\GalleryController@destroy')->name('gallery.destroy');
//
    Route::resource('/contact','Admin\ContactController');
    Route::get('/contact/delete/{id}','Admin\ContactController@destroy')->name('contact.destroy');
//
//    Route::resource('/teacherdetail','Admin\TeacherdetailController');
//    Route::get('/teacherdetail/delete/{id}','Admin\TeacherdetailController@destroy')->name('teacherdetail.destroy');
////
//    Route::resource('/blog','Admin\BlogController');
//    Route::get('/blog/delete/{id}','Admin\BlogController@destroy')->name('blog.destroy');
//
//    Route::resource('/notice','Admin\NoticeController');
//    Route::get('/notice/delete/{id}','Admin\NoticeController@destroy')->name('notice.destroy');
//
//    Route::resource('/event','Admin\EventController');
//    Route::get('/event/delete/{id}','Admin\EventController@destroy')->name('event.destroy');
//
//    Route::resource('/download','Admin\DownloadController');
//    Route::get('/download/delete/{id}','Admin\DownloadController@destroy')->name('download.destroy');

    Route::resource('/category','Admin\CategoryController');
    Route::get('/category/delete/{id}','Admin\CategoryController@destroy')->name('category.destroy');

        Route::resource('/program','Admin\ProgramController');
        Route::get('/program/delete/{id}','Admin\ProgramController@destroy')->name('program.destroy');

//    Route::resource('/testimonial', 'Admin\TestimonialController');
//    Route::get('/testimonial/delete/{id}','Admin\TestimonialController@destroy')->name('testimonial.destroy');

//    Route::resource('/sponsor','Admin\SponsorController');


    Route::resource('themes','Admin\ThemesController');

});


Route::namespace('Admin\Auth')->group(function (){

    //login route
    Route::get('/login','LoginController@showLoginForm')->name('login');
    Route::post('/login','LoginController@login')->name('login.store');
    Route::get('/logout','LoginController@logout')->name('logout');

    //forget password
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('/password/email','ForgotPasswordController@sendLinkRequestForm')->name('password.email');


    //reset password
    Route::get('/password/reset{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::get('/password/reset','ResetPasswordController@reset')->name('password.update');
});

