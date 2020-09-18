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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'StaticPagesController@home')->name("home");
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name("about");

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');


Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');
//激活用户是的激活令牌
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');//显示重置密码的邮箱发送页面
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');//邮箱发送重设链接
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');//密码更新页面
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');//执行密码更新操作
//发布的微博操作
Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);
//粉丝列表和关注者列表
Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');
