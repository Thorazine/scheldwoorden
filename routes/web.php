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

############################ PATTERNS ############################

Route::pattern('letter', '[a-z]{1}');
Route::pattern('word', '[a-zA-Z\-]{3,50}');


############################ PAGES ############################

Route::get('/', array('as' => 'index', 'uses' => 'PagesController@index')); // home page

Route::get('/{letter}', array('as' => 'alfabet', 'uses' => 'PagesController@alfabet')); // Alfabetical list for letter

Route::get('/willekeurig', array('as' => 'random', 'uses' => 'PagesController@random')); // random word

Route::get('/array/php', array('as' => 'array.php', 'uses' => 'PagesController@arrayPhp')); // As an array

Route::get('/array/json', array('as' => 'array.json', 'uses' => 'PagesController@arrayJson')); // As an array
