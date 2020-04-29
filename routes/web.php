<?php

use App\Http\Controllers\FrontEndController;
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
//Home
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'FrontEndController@getHome');

Route::get('/about', 'FrontEndController@getAbout');

Route::get('/contact', 'FrontEndController@getContact');

Route::get('/member', 'FrontEndController@getMember');

Route::get('/race', 'FrontEndController@getRace');

// Route::get('/about', function() {
//     return view('about');
// });

// Route::get('/contact', function() {
//     return view('contact');
// });

// Route::get('/member', function() {
//     return view('member');
// });

// Route::get('/race', function() {
//     return view('race');
// });
