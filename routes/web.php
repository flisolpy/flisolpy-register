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

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/event', [\App\Http\Controllers\Admin\EventsController::class, 'index'])->name('event');
    Route::get('/event/create', [\App\Http\Controllers\Admin\EventsController::class, 'create'])->name('event.create');
    Route::get('/event/{id}/edit', [\App\Http\Controllers\Admin\EventsController::class, 'edit'])->name('event.edit');
    Route::post('/event', [\App\Http\Controllers\Admin\EventsController::class, 'store'])->name('event.store');
    Route::patch('/event/{id}', [\App\Http\Controllers\Admin\EventsController::class, 'update'])->name('event.update');
});
