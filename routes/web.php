<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ContentSliderController;
use App\Http\Controllers\AuthController;


Route::match(['get', 'post'], '/',[MainController::class,'index'])->name('home');
Route::get('/login', [AuthController::class,'formLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('auth');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

// Route::match(['get', 'post'], '/login',[AuthController::class,'login'])->name('login');
Route::match(['get', 'post'], '/course/{slug}',[MainController::class,'course'])->name('course.detail');

// Route::get('/dashboard/posts/createSlug',[PelatihanController::class,'checkSlug']);


Route::prefix('admin')->middleware('auth')->group(function () {
    // /admin

    Route::controller(ContentSliderController::class)->group(function () {
        Route::get('/', 'index')->name('admin.home');
        Route::post('/', 'store')->name('admin.home.content.store');
        // Route::put('/', 'update')->name('admin.home.content.update');
        Route::delete('/', 'destroy')->name('admin.home.content.destroy');              
    });

    // Route::controller(ContentSliderController::class)->group(function () {
    //     Route::prefix('contentSlider')->group(function () {
    //         // /admin/course

    //         // Pelatihan & Search
    //         Route::match(['get', 'post'], '/', 'index')->name('admin.course');
    //         // Route::get('/','index')->name('admin.course.index');
    //         Route::post('/store','store')->name('admin.course.store');
    //         Route::get('/{slug}','show')->name('admin.course.detail');
    //         Route::get('/{slug}/edit','edit')->name('admin.course.edit');
    //         Route::put('/{slug}','update')->name('admin.course.update');
    //         Route::delete('/{slug}','destroy')->name('admin.course.destroy');
    //     });       
    // });

    Route::controller(PelatihanController::class)->group(function () {        
        Route::prefix('course')->group(function () {
            // /admin/course

            // Pelatihan & Search
            Route::match(['get', 'post'], '/', 'index')->name('admin.course');
            // Route::get('/','index')->name('admin.course.index');
            Route::post('/store','store')->name('admin.course.store');
            Route::get('/{slug}','show')->name('admin.course.detail');
            Route::get('/{slug}/edit','edit')->name('admin.course.edit');
            Route::put('/{slug}','update')->name('admin.course.update');
            Route::delete('/{slug}','destroy')->name('admin.course.destroy');
        });
    });

    // Route::controller(PesertaController::class)->group(function () {        
    //     Route::prefix('peserta')->group(function () {
    //         // /admin/course

    //         // Pelatihan & Search
    //         Route::match(['get', 'post'], '/', 'index')->name('admin.peserta');
    //         // Route::get('/','index')->name('admin.course.index');
    //         Route::post('/store','store')->name('admin.peserta.store');
    //         Route::get('/{id}','show')->name('admin.peserta.detail');
    //         Route::get('/{id}/edit','edit')->name('admin.peserta.edit');
    //         Route::put('/{id}','update')->name('admin.peserta.update');
    //         Route::delete('/{id}','destroy')->name('admin.peserta.destroy');
    //     });
    // });

    
});


// Route::prefix('admin')->group(function () {
// });

