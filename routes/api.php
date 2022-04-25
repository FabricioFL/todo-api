<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'getTodos']);

Route::post('/create', [TodoController::class, 'createTodo']);

Route::put('/update', [TodoController::class, 'updateTodo']);

Route::post('/remove', [TodoController::class, 'deleteTodo']);
