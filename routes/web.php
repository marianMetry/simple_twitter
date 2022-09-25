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
//middlewares
Route::middleware('auth')->group(function () {
    Route::get('/post/{id}/like', [LikeController::class, 'likeOrDislike'])->middleware('only-post');
    Route::resource('/posts', PostsController::class)->only('index', 'store');
    Route::get('/', function () {

        return redirect('posts');
    });
});
