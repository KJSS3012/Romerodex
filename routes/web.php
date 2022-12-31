<?php

use App\Http\Controllers\RomerodexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|{{  }}
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/romerodex/about', function () {
    return view('owners');
});

Route::get('/romerodex/history',[RomerodexController::class, 'history']);
Route::get('/romerodex/mail',[RomerodexController::class, 'mail']);

Route::resource('/romerodex', RomerodexController::class);

require __DIR__ . '/auth.php';