<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CombinationController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'home'])->name('/');

Route::group(['prefix' => 'test', 'as' => 'test.'], function () {
    Route::get('/', [CombinationController::class, 'index'])->name('/');
    Route::post('combination', [CombinationController::class, 'combination'])->name('combination');
});
