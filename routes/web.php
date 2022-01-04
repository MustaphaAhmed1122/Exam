<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::resource('examinfo','App\Http\Controllers\ExaminfoController');
Route::resource('makequestion' , 'App\Http\Controllers\QuestionController');
Route::resource('student','App\Http\Controllers\StudentController');
Route::resource('answer','App\Http\Controllers\AnswerController');
Route::resource('result' , 'App\Http\Controllers\ResultController');

});


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
