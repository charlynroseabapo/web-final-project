<?php

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

Route::get('/', function () {
    return view('add');
});

Route::resource('budgets', 'BudgetController');

//Route::get('/layout', 'BudgetController@index');

//Route::get('saved', 'BudgetController@saved');

