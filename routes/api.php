<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\AuthController;
use App\Models\Pessoa;
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

Route::get('/pessoas', [PessoaController::class, 'index']);

Route::get('/pessoas/{id}', [PessoaController::class, 'show']);

Route::put('/pessoas/{id}', [PessoaController::class, 'update']);

Route::delete('/pessoas/{id}', [PessoaController::class, 'destroy']);

Route::get('/pessoas/search/{nome}', [PessoaController::class, 'search']);

Route::post('/pessoas', [PessoaController::class, 'store']);

Route::group(['middleware' => ['auth:sanctum']], function () {
});
