<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Home')->name('Home');
});

//  Instructor-dashboard
Route::prefix('service')->group(function () {
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/mobile-app', 'serviceMobileApp')->name('serviceMobileApp');
        Route::get('/MT5', 'serviceMT5')->name('serviceMT5');
        Route::get('/MT4', 'serviceMT4')->name('serviceMT4');
        Route::get('/Forex', 'serviceForex')->name('serviceForex');
        Route::get('/Indices', 'serviceIndices')->name('serviceIndices');
        Route::get('/PreciousMetal', 'serviceMetal')->name('serviceMetal');
        Route::get('/Stock', 'serviceStock')->name('serviceStock');
        Route::get('/CryptoCurrency', 'serviceCrypto')->name('serviceCrypto');
    });
});


//  courses
Route::prefix('pages')->group(function () {
    Route::controller(pagesController::class)->group(function () {
        Route::get('/about', 'aboutus02')->name('about');
        Route::get('/contact', 'contact')->name('contact');
    });
});
