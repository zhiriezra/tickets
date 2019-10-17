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

Route::get('/', 'FrontController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ADMIN ROUTES
Route::get('admin', 'AdminController@index')->name('admin.home');
Route::get('admin/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\Admin\LoginController@login')->name('post.admin.login');
Route::post('admin/password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/reset', 'Auth\Admin\ResetPasswordController@reset');
Route::post('admin/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

//categories
Route::get('admin/categories-all', 'CategoryController@index')->name('categories');
Route::get('admin/categories/create', 'CategoryController@create')->name('category.create');
Route::post('admin/categories/create', 'CategoryController@store')->name('category.store');
Route::get('admin/categories/edit/{slug}', 'CategoryController@edit')->name('category.edit');
Route::post('admin/categories/edit/{slug}', 'CategoryController@update')->name('category.update');
Route::get('admin/categories/remove/{slug}', 'CategoryController@destroy')->name('category.remove');

//events
Route::get('admin/events/create', 'EventController@create')->name('event.create');
Route::post('admin/events/create', 'EventController@store')->name('event.store');
Route::get('admin/events/edit/{slug}', 'EventController@edit')->name('event.edit');
Route::post('admin/events/edit/{slug}', 'EventController@update')->name('event.update');

Route::get('admin/events/active-events', 'EventController@activeEvents')->name('events.active');
Route::get('admin/events/inactive-events', 'EventController@inActiveEvents')->name('events.inactive');

//Front
Route::get('event/{slug}', 'FrontController@detail')->name('event.detail');

// Order
Route::post('event/{slug}/order', 'OrderController@initiatePayment')->name('event.order');