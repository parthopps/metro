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

Route::get('/home', 'FrontendController@pps');



Route::get('/', function () {
    return view('welcome');
});
Route::get('/lost', function () {
    return view('lost');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/Stock/view', 'HomeController@buydataview');
Route::get('/lost/found/view', 'LostFoundController@lostfoundview');
Route::post('/add/lostfound/insert', 'LostFoundController@lostfoundinsert');
Route::get('/add/search/view', 'SearchController@searchview');
Route::post('/add/search/insert','SearchController@searchinsert');
Route::get('/search', 'SearchController@pagesearchview');
Route::get('/edit/search/{search_id}', 'SearchController@editsearchview');
Route::post('/add/buydata/insert','SearchController@buydatainsert');
