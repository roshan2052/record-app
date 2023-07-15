<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\TestController;
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
Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    return "Cache Cleared!";
});

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');


Route::middleware(['web','auth'])->prefix('backend/')->name('backend.')->group(function () {
    Route::get('dashboard',[HomeController::class, 'index'])->name('dashboard.index');

    Route::resource('test', TestController::class)->names('test');

    Route::resource('bank', BankController::class)->names('bank');

});


