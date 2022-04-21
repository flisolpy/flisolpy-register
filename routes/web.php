<?php

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


Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);
Route::get('/incripcion/{slug}/{id}', [\App\Http\Controllers\SiteController::class, 'incription']);
Route::get('/incripcion-confirm', [\App\Http\Controllers\SiteController::class, 'incription_confirm']);
Route::post('/incripcion', [\App\Http\Controllers\SiteController::class, 'incription_save']);




Auth::routes();


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/event', [\App\Http\Controllers\Admin\EventsController::class, 'index'])->name('event');
    Route::get('/event/create', [\App\Http\Controllers\Admin\EventsController::class, 'create'])->name('event.create');
    Route::get('/event/{id}/edit', [\App\Http\Controllers\Admin\EventsController::class, 'edit'])->name('event.edit');
    Route::post('/event', [\App\Http\Controllers\Admin\EventsController::class, 'store'])->name('event.store');
    Route::patch('/event/{id}', [\App\Http\Controllers\Admin\EventsController::class, 'update'])->name('event.update');
    Route::get('/event/delete_file/{filepath}/{id}/{row_name}', [\App\Http\Controllers\Admin\EventsController::class, 'delete_file'])->name('delete.file');

    Route::get('/subscribed', [\App\Http\Controllers\Admin\SubscribedController::class, 'index'])->name('subscribed');
    Route::get('/subscribed/create', [\App\Http\Controllers\Admin\SubscribedController::class, 'create'])->name('subscribed.create');
    Route::get('/subscribed/{id}/edit', [\App\Http\Controllers\Admin\SubscribedController::class, 'edit'])->name('subscribed.edit');
    Route::patch('/subscribed/{id}', [\App\Http\Controllers\Admin\SubscribedController::class, 'update'])->name('subscribed.update');
    Route::get('/subscribed/delete_file/{filepath}/{id}/{row_name}', [\App\Http\Controllers\Admin\SubscribedController::class, 'delete_file'])->name('delete.file');
});
