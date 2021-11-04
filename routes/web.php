<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
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
    return view('home', 
    [            
    "active_welcome" => "active"
    ]);
    });

Route::get('/contact', function () {
    return view('contact',
    [
    "active_contacts" => "active"
    ]);
    });

Route::resource('car', CarController::class);
Route::resource('brand', BrandController::class); 