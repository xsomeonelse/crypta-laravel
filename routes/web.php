<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/legal', 'legal')->name('legal');

Route::view('/solar', 'solar')->name('solar');
Route::view('/eolica', 'eolica')->name('eolica');
Route::view('/hidraulica', 'hidraulica')->name('hidraulica');
Route::view('/biogas', 'biogas')->name('biogas');
Route::view('/biomasa', 'biomasa')->name('biomasa');
Route::view('/geotermica', 'geotermica')->name('geotermica');

Route::view('/contact', 'contact')->name('contact');
// Route::post('/contact', 'FormController@store')->name('form.store');
Route::post('/contact', 'FormController@capthcaFormValidate');
Route::get('reload-captcha', 'FormController@reloadCaptcha');

// Route::get('contact-form', 'CaptchaServiceController@index');
// Route::post('captcha-validation', 'CaptchaServiceController@capthcaFormValidate');
// Route::get('reload-captcha', 'CaptchaServiceController@reloadCaptcha');
Auth::routes();



