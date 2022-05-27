<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

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

Route::get('/', function (){
    return view("index");
});

Route::get('/services', function (){
    return view("services");
});

Route::get('/about', function (){
    return view("about");
});

Route::get('/service_details', function (){
    return view("service_details");
});

Route::get('/contact', function (){
    return view("contact");
});


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function() {
        return view('admin.pages.dashboard');
    })->name('dashboard');
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/transport', [UsersController::class, 'transport'])->name('transport');
    Route::get('/requests', [UsersController::class, 'requests'])->name('requests');


    Route::get("/set-status/{id}", [\App\Http\Controllers\FeedbackController::class, "changeStatus"])->name("status");
});



require __DIR__.'/auth.php';
