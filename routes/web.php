<?php
use App\Http\Controllers\indexController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\formationController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', [indexController::class, 'index']);*/
/*add*/
Route::get('/', [homeController::class, 'index']);
Route::get('/Formation', [formationController::class, 'index']);
// comment
//hgjhdgsjh
