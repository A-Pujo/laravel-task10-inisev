<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/websites', [WebsiteController::class, 'index']);
Route::get('/websites/{website:id}', [WebsiteController::class, 'show']);
Route::post('/websites', [WebsiteController::class, 'store']);
Route::put('/websites/{website:id}', [WebsiteController::class, 'update']);
Route::delete('/websites/{website:id}', [WebsiteController::class, 'destroy']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post:id}', [PostController::class, 'show']);
Route::post('/post', [PostController::class, 'store']);
Route::put('/post/{post:id}', [PostController::class, 'update']);
Route::delete('/post/{post:id}', [PostController::class, 'destroy']);

Route::get('/subs', [SubscriptionController::class, 'index']);
Route::get('/subs/{subscription:id}', [SubscriptionController::class, 'show']);
Route::get('/subs/web_id/{subscription:website_id}', [SubscriptionController::class, 'show_by_web_id']);
Route::post('/subs', [SubscriptionController::class, 'store']);
Route::put('/subs/{subscription:id}', [SubscriptionController::class, 'update']);
Route::delete('/subs/{subscription:id}', [SubscriptionController::class, 'destroy']);
