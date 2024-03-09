<?php

use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::controller(IndustryController::class)->group(function () {
    Route::get('/testimonial','testimonial')->name('testimonial');
    Route::get('/pagination','pagination')->name('pagination');
    Route::get('/service','service')->name('service');
    Route::get('/project','project')->name('project');
    Route::get('/feature','feature')->name('feature');
    Route::get('/contact','contact')->name('contact');
    Route::get('/nopage','nopage')->name('nopage');
    Route::get('/about','about')->name('about');
    Route::get('/team','team')->name('team');
    Route::get('/','index')->name('home1');
});
Route::controller(ProductController::class)->group(function () {
    Route::resource('/product', ProductController::class)->names('product');
});


// Route::get('/admin', function () {
//     return view('auth.login');
// });






Auth::routes();


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/slider', [App\Http\Controllers\HomeController::class, 'slider'])->name('slider');
Route::post('/singout', [App\Http\Controllers\HomeController::class, 'signout'])->name('signout');
