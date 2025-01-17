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

// Route::get('posts',HomeController::class);
Route::resource('posts',HomeController::class);
// Route::get('posts/{id}', [HomeController::class, 'show']);
// Route::get('posts/create', [HomeController::class, 'create']);
// Route::get('/{id}', [HomeController::class, 'show']);



// Route::get('posts/create', function () {
//     echo "hehe";
// });


