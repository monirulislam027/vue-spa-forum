<?php


use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::apiResource('/question', \App\Http\Controllers\Api\QuestionController::class);
Route::apiResource('/category', \App\Http\Controllers\Api\CategoryController::class);
Route::apiResource('/question/{question}/reply', \App\Http\Controllers\Api\ReplyController::class);

Route::post('like/{reply}', [LikeController::class, 'likeIt']);
Route::delete('like/{reply}', [LikeController::class, 'unlikeIt']);


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});
