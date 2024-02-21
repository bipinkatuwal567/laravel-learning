<?php

use App\Http\Controllers\FrontendController;
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

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', [FrontendController::class, 'index']);

Route::get('/about', [FrontendController::class, 'about']);
Route::get('/about/{data}', [FrontendController::class, 'aboutDetails']);

Route::get('/contact', [FrontendController::class, 'contact']);