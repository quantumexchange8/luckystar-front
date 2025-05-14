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
            Route::get('/mobile-app' ,'serviceMobileApp')->name('serviceMobileApp');
            Route::get('/MT5' ,'serviceMT5')->name('serviceMT5');
            Route::get('/MT4' ,'serviceMT4')->name('serviceMT4');
        });
});


    //  courses
Route::prefix('pages')->group(function () {
    Route::controller(pagesController::class)->group(function () {
        Route::get('/about' ,'aboutus02')->name('about');
        Route::get('/contact' ,'contact')->name('contact');
    });
});