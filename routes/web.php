<?php

use App\Http\Controllers\API\ApiController;
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
    return view('welcome');
});

Route::get('/allposts', [ApiController::class, 'apiAllPosts']);
Route::get('/edit/{id}', [ApiController::class, 'apiEditPosts']);
Route::put('/posts/{id}', [ApiController::class, 'apiPostsEdit']);
Route::delete('/delete/{id}', [ApiController::class, 'apiDelete']);
Route::post('/posts', [ApiController::class, 'apiPosts']);
Route::get('/previewposts', [ApiController::class, 'apiPreview']);
Route::get('/addposts', function () {
    return view('addposts');
});