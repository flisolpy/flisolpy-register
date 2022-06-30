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


Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
    Route::get('/subscribed/{id}/show', [\App\Http\Controllers\Admin\SubscribedController::class, 'show'])->name('subscribed.show');
    Route::patch('/subscribed/{id}', [\App\Http\Controllers\Admin\SubscribedController::class, 'update'])->name('subscribed.update');
    Route::delete('/subscribed/{id}', [\App\Http\Controllers\Admin\SubscribedController::class, 'delete'])->name('subscribed.delete');
    Route::get('/subscribed/delete_file/{filepath}/{id}/{row_name}', [\App\Http\Controllers\Admin\SubscribedController::class, 'delete_file'])->name('delete.file');

    Route::get('/lottery', [\App\Http\Controllers\Admin\LotteryController::class, 'index'])->name('lottery');


    Route::get('/user', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('user');
    Route::post('/user', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('user.store');
    Route::get('/user/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create');
    Route::get('/user/{id}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.edit');
    Route::get('/subscribed/{id}/show', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('user.show');
    Route::patch('/user/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [\App\Http\Controllers\Admin\UserController::class, 'delete'])->name('user.delete');


    //Teste route



});
