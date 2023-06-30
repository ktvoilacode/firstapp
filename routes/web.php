<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

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

// in route get method we pass route and anonymous function


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/galleryone', function () {
    return view('gallery');
});

Route::get('/about/history', function () {
    return view('history');
});


Route::get('/calculator/form', [CalculatorController::class, 'form']);
Route::get('/calculator/result', [CalculatorController::class, 'result']);
Route::get('/calculator/logs', [CalculatorController::class, 'logs']);

Route::get('/string/form', function () {
});

Route::get('/string/result', function () {
});
