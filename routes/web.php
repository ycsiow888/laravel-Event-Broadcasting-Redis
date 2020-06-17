<?php
use Illuminate\Http\Request;

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

// Dashboard
Route::get('/', 'ChatsController@index')->name('dashboard');

// Login
Route::get('auth/login', 'Auth\LoginController@index')->name('login');
Route::post('auth/login', 'Auth\LoginController@authenticate')->name('postLogin');

// Registration
Route::get('auth/register', 'Auth\RegisterController@index')->name('register');
Route::post('auth/register', 'Auth\RegisterController@create')->name('postRegister');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Send Message
Route::get('/call-event', 'ChatsController@fetchMessages');
Route::post('/call-event', 'ChatsController@sendMessage');
