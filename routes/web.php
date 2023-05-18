<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

##############################################################################
//admin routes starts here
##############################################################################

Route::get('/admin', function(){
    return view('/admin/home_admin');
});

##############################################################################
//admin routes ends here
##############################################################################


##############################################################################
//testing routes starts here
##############################################################################

// Route::get('/admin/user', function(){
//     return view('/admin/user');
// });

Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'Admin_User_Index']);

##############################################################################
//testing routes ends here
##############################################################################



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
//Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('seatbook', 'App\Http\Controllers\CoffeController@seatbook')->name('seatbook');
Route::post('supply-data', 'App\Http\Controllers\CoffeController@supplyData')->name('supply-data');

Route::get('home', 'App\Http\Controllers\ContactController@home')->name('home');
Route::post('store-data', 'App\Http\Controllers\ContactController@storeData')->name('store-data');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
