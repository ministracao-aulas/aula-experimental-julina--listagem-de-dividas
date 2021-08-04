<?php

use App\Http\Controllers\DebitoController;
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

Route::get('/', [DebitoController::class, 'index'])->name('debitos.index');
Route::get('/parcelas/{debito_id}', [DebitoController::class, 'listParcelamentoById'])->name('debitos.parcelas');
