<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\learnController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\teamsController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\formationController;
use App\Http\Controllers\detailFormationController;
use App\Http\Controllers\detailFormationIIController;
use App\Http\Controllers\formulaireController;

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

Route::get('/Formation', [formationController::class, 'index'])->name('ourFormation');

Route::get('/', [indexController::class, 'index'])->name('index');


// Route::get('/form',[formulaireController::class,'create'])->name('formulaire');

Route::get('/formationdetail/{id}',[DController::class, 'show'])
->name('Formation-details.show');
Route::get('/learn_more/{id}', [ContenuController::class, 'show'])
->name('learn.show');
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


Route::get('/team', [FormateurController::class, 'index'])->name('teams.team');
Route::get('/team/create', [FormateurController::class, 'create'])
->name('teams.create');


Route::post('/team/store', [FormateurController::class, 'store'])->name('teams.store');
Route::delete('/team/{id}', [FormateurController::class, 'destroy'])->name('teams.destroy');
Route::put('/team/{id}', [FormateurController::class, 'update'])->name('teams.update');
Route::get('/team/{team}/edit', [FormateurController::class, 'edit'])
->name('teams.edit');
// Route::put('/team/{team}', [teamsController::class, 'update'])
// ->name('teams.update');

});
Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/addFormation', [detailFormationIIController::class, 'store'])
->name('formation.store');

// Route::controller(AuthController::class)->group(function () {
//     Route::get('/registermenu', 'register')->name('register');
//     Route::post('/registermenu', 'registerSave')->name('register.save');
 
//     Route::get('/loginmenu', 'login')->name('login');
//     Route::post('/loginmenu', 'loginAction')->name('login.action');
 
//     Route::get('/logout', 'logout')->middleware('auth')->name('logout');
// }); 

// Route::get('/logout',[LoginController::class,'logout'])
// ->name('login.logout');

Route::get('/content', [ContenuController::class, 'index'])
->name('contenu.index');
Route::get('/content/create', [ContenuController::class, 'create'])
->name('contenu.create');
Route::post('/content/store', [ContenuController::class, 'store'])
->name('contenu.store');
// Route::get('/admin/{course}', [CourseController::class, 'show'])
// ->name('courses.show');


// Route::post('/login_user',[LoginController::class,'login_user'])
// ->name('login_user.login');

// Route::get('/login_user',[LoginController::class,'show'])
// ->name('login_user.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/signin', [StudentController::class, 'showSignInForm'])->name('signin');
Route::post('/signin', [StudentController::class, 'signIn'])->name('signIn');

Route::get('/signup', [StudentController::class, 'showSignUpForm'])->name('signup');
Route::post('/signup', [StudentController::class, 'signUp'])->name('signUp');
Route::get('/logout',  [StudentController::class,'logout'])->middleware('auth')->name('logout');