<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecondArticleController;
use App\Models\SecondArticle;

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

Route::get('/articles', [SecondArticleController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [SecondArticleController::class, 'dashboard'])->name('dashboard');

Route::get('/articles/detail/{id}', [SecondArticleController::class, 'detail']);

Route::post('/articles/add', [SecondArticleController::class, 'create']);

Route::get('/articles/add', [SecondArticleController::class, 'add']); 

Route::get('/articles/delete/{id}', [ SecondArticleController::class, 'delete' ]);

Route::get('/articles/edit/{id}', [ SecondArticleController::class, 'edit' ]);

Route::post('/articles/update/{id}', [SecondArticleController::class, 'update']);
