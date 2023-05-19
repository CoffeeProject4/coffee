<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/seatbook', function () {
    return view('seatbook');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('seatbook', 'App\Http\Controllers\CoffeeController@seatbook')->name('seatbook');
Route::post('supply-data', 'App\Http\Controllers\CoffeeController@supplyData')->name('supply-data');

Route::get('home', [ContactController::class, 'home'])->name('home');
Route::post('store-data', [ContactController::class, 'storeData'])->name('store-data');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
##############################################################################
// Admin Routes
##############################################################################

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home_admin');
    })->name('admin.home');

    Route::get('/user', [UserController::class, 'Admin_User_Index'])->name('admin.user');

    Route::get('/contact', [ContactController::class, 'adminContactIndex'])->name('admin.contact');
});
##############################################################################
// End of Admin Routes
##############################################################################
