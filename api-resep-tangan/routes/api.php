<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\RecipesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// domain/api/auth
Route::group([
    'prefix' => 'auth',
    'controller' => AuthController::class
], function () {
    Route::get('/me', 'me'); // Token Required
    Route::post('/refresh', 'refresh')->name('refresh');
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
    Route::post('/logout', 'logout')->name('logout');
    Route::put('/password', 'change_password')->name('change-password');
});

// domain/api/recipes
Route::group([
    'prefix' => 'recipes',
    'controller' => RecipesController::class
], function () {
    Route::get('/', 'recipes')->name('get_recipes');
    Route::post('/', 'add_recipes');
    Route::put('/', 'update_recipes');
    Route::delete('/', 'delete_recipes');

    // domain/api/recipes/contents
    Route::group([
        'prefix' => 'contents',
        'controller' => ContentsController::class
    ], function () {
        Route::post('/', 'add_contents');
        Route::put('/', 'update_contents');
        Route::delete('/', 'delete_contents');
        Route::get('/{basename}', 'media');
    });

    // domain/api/recipes/rating
    Route::group([
        'prefix' => 'rating',
        'controller' => RatingController::class,
    ], function () {
        Route::get('/', 'rating');
        Route::post('/', 'add_rating');
        Route::put('/', 'update_rating');
    });

    // domain/api/recipes/comments
    Route::group([
        'prefix' => 'comments',
        'controller' => CommentsController::class
    ], function () {
        Route::get('/', 'comments');
        Route::post('/', 'add_comment');
        Route::delete('/', 'delete_comment');
    });
});