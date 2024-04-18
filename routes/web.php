<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\formationController;
use App\Http\Controllers\teamsController;
use Illuminate\Support\Facades\Auth;


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

/*add*/
Route::get('/', [indexController::class, 'index']);
Route::get('/Formation', [formationController::class, 'index']);
Route::get('/formationdetail',function(){
    return view ('Formation-details');
});
// routes de page admin
/*Route::get('/admin', [CourseController::class, 'index'])
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
/*Route::put('/admin/{id}', 'CourseController@update')->name('courses.update');*/




Route::middleware('auth')->group(function () {
    Route::delete('/admin/{course}', [CourseController::class, 'destroy'])
->name('courses.destroy');
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
Route::get('/team', [teamsController::class, 'index'])->name('teams.team');
Route::get('/team/create', [teamsController::class, 'create'])
->name('teams.create');
Route::post('/team/store', [teamsController::class, 'store'])
->name('teams.store');
Route::get('/team/{team}/edit', [teamsController::class, 'edit'])
->name('teams.edit');
Route::put('/team/{team}', [teamsController::class, 'update'])
->name('teams.update');

});
Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
