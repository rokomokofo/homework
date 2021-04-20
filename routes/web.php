<?php


use App\Http\Controllers\ipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\palindromController;

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
    return view('welcome');
});

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('ip', [ipController::class,'ip']);

Route::get('palindrom/{text}', [palindromController::class, 'palindrom'])->middleware('IP');
