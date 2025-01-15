<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class, 'index']);

// Route::get('contact', function () {
//     $data=[
//         'name' => "contact",
//         'des' => "Pyae",
//     ];
//     return view("contact",compact("data"));
// });

// Route::get('about', function () {
//     $data=[
//         'name' => "about",
//         'des' => "Zon",
//     ];
//     return view("about",compact("data"));
// });

