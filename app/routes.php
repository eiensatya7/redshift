<?php

/*
 |--------------------------------------------------------------------------
 | Application Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register all of the routes for an application.
 | It's a breeze. Simply tell Laravel the URIs it should respond to
 | and give it the Closure to execute when that URI is requested.
 |
 */

 Route::get('/', function() {
 	return 'hello';
 });

 Route::get('register', 'RegistrationController@renderForm');
 Route::post('register', 'RegistrationController@onSubmitForm');

 Route::get('superUser','SuperUserController@renderForm');

 Route::get('superUserAsc','SuperUserController@ajaxGet');
 Route::post('superUserAsc','SuperUserController@ajaxPost');




 ?>