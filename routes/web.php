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

Route::get('/', function () {
    return view('rsclitForm');
});

Route::get('/reg', function(){
	return view('register');
});

Route::get('/rsclit', function(){
	return view('rsclitForm');
});