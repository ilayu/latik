<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
  Route::get('/', function () {
    return view('welcome');
  })->name('welcome');

  Route::get('logout', [
    'uses' => 'PageController@logOut',
    'as' => 'logOut'
  ]);

  Route::get('{page}', [
    'uses' => 'PageController@getPage',
    'as' => 'getPage'
  ]);


  Route::get('{item}/edit/false', [
    'uses' => 'PageController@editFalse'
  ]);



  Route::get('{page}/edit/{item}/{id}', [
    'uses' => 'PageController@editId'
  ]);

  // Link
  Route::get('{page}/link', [
    'uses' => 'LinkController@getLink',
    'as' => 'getLink'
  ]);
  Route::get('{page}/del/link/{id}', [
    'uses' => 'LinkController@delId'
  ]);
  Route::post('{page}/edit/link/{id}', [
    'uses' => 'LinkController@editLink',
    'as' => 'editLink'
  ]);

  // Text
  Route::get('{page}/text', [
    'uses' => 'TextController@getText',
    'as' => 'getText'
  ]);
  Route::get('{page}/del/text/{id}', [
    'uses' => 'TextController@delId'
  ]);
  Route::post('{page}/edit/text/{id}', [
    'uses' => 'TextController@editText',
    'as' => 'editText'
  ]);


  Route::post('signin', [
    'uses' => 'PageController@signInForm',
    'as' => 'signInForm'
  ]);
  Route::post('signup', [
    'uses' => 'PageController@signUpForm',
    'as' => 'signUpForm'
  ]);
  Route::post('shell', [
    'uses' => 'ShellController@shell',
    'as' => 'shell'
  ]);

  Route::post('{page}/add/text', [
    'uses' => 'TextController@addText',
    'as' => 'addText'
  ]);

  Route::post('{page}/add/link', [
    'uses' => 'LinkController@addLink',
    'as' => 'addLink'
  ]);

});
