<?php
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

use App\Http\Controllers\formationController;

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

Route::get('/', [indexController::class, 'index']);
/*add*/
/*Route::get('/', [indexController::class, 'index']);*/
Route::get('/Formation', [formationController::class, 'index']);
// routes de page admin
Route::get('/admin', [CourseController::class, 'index'])
->name('courses.index');
Route::get('/admin/create', [CourseController::class, 'create'])
->name('courses.create');
Route::post('/admin/store', [CourseController::class, 'store'])
->name('courses.store');
Route::get('/admin/{course}', [CourseController::class, 'show'])
->name('courses.show');
Route::get('/admin/{course}/edit', [CourseController::class, 'edit'])
->name('courses.edit');
Route::put('/admin/{course}', [CourseController::class, 'update'])
->name('courses.update');
Route::delete('/admin/{course}', [CourseController::class, 'destroy'])
->name('courses.destroy');