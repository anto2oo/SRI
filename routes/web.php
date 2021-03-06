<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('error', function(){
    throw new Exception('This is just a test exception');
});

Route::get('/', 'WelcomeController@news');

Route::get('dashboard', 'DashboardController@show')->name('dashboard');
Route::get('stats', 'StatController@show')->name('stats');
Route::get('budget', 'BudgetController@show')->name('budget');
Route::get('export', 'BudgetController@export')->name('budget.export');
Route::resource('news', 'NewsController');

Route::resource('studies', 'StudyController');
Route::resource('students', 'StudentController');
Route::resource('semesters', 'SemesterController');
Route::resource('internships', 'InternshipController');

Route::resource('orders', 'OrderController');
Route::resource('missions', 'MissionController');
Route::resource('transfers', 'TransferController');
Route::resource('weeks', 'IntWeekController');
