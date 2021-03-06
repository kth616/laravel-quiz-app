<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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


Route::get('/layouts', function () {
    return view('base');
});

Route::get('/quizzes', function () {
    return view('quizzes.index');
})->name('quizzes.index');

Route::get('/quizzes/show', function () {
    return view('quizzes.show');
})->name('quizzes.show');

Route::get('/quizzes/create', function () {
    return view('quizzes.create');
})->name('quizzes.create');

Route::delete('quizzes/{id}', function ($id) {
    return json_encode(['message' => 'ID:'.$id.' が削除されるIDもです(仮の出力)']);
})->name('quizzes.delete');
