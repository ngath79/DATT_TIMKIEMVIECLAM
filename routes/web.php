<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', 'User\UserController@home_page')->name('user.pages.home');
Route::get('/home', 'User\UserController@home_page')->name('user.pages.home');


Route::get('/login', 'User\LoginController@view_loginpage')->name('user.pages.login_page');
Route::post('/post_login', 'User\LoginController@post_login')->name('user.post_login');
Route::get('/logout', 'User\LoginController@logout')->name('logout');


Route::post('/post_register', 'User\LoginController@post_register')->name('user.post_register');
Route::get('user/active/{token}', 'User\LoginController@active_acount')->name('user.active_account');


Route::get('/register', 'User\LoginController@get_register')->name('user.pages.register_page');
Route::post('/register', 'User\LoginController@post_register')->name('user.post_register');


Route::get('/forgotpassword', 'User\LoginController@viewForgotPassword')->name('user.forgotpassword');
Route::post('/forgotpassword/notice', 'User\LoginController@sendForgotPassword')->name('user.sendforgotpassword');
Route::get('/forgotpassword/code={code}', 'User\LoginController@clickMailForgotPassword')->name('user.clickMailForgotPassword');
Route::post('/forgotpassword/change', 'User\LoginController@forgotpassword_change')->name('user.forgotpassword.change');


//Bài viết -Tin tức
Route::get('/tin-tuc', 'User\UserController@viewNews')->name('user.tin-tuc');
Route::get('/tin-tuc/{id}', 'User\UserController@viewNewsCate')->name('user.pages.viewNewsCate');
Route::get('/tin-tuc-chi-tiet/{ten}', 'User\UserController@viewNewDetail')->name('user.viewNewDetail');


Route::get('/', function () {
    return view('welcome');
});


