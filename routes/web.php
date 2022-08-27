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
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('/romerodex', RomerodexController::class);

Route::get('/romerodex/about', function () {
    return view('owners');
});

require __DIR__ . '/auth.php';
