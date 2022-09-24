<?php

use App\Http\Controllers\{LikeController, PostsController};
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

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::resource('/', PostsController::class);
    Route::get('/post/{id}/like', [LikeController::class, 'likeOrDislike']);
});
