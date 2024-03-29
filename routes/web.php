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
    return view('welcome');
});


Route::resource('menus', 'MenuController');


Route::get('/cart', 'CartController@index');

Route::get('/dashboard', function() {
    //
    return view('dashboard');
});

Auth::routes();

Route::get('/redirect', 'Auth\LoginController@redirectToFacebook');
Route::get('/callback', 'Auth\LoginController@callback');

Route::get('/home', 'HomeController@index')->name('home');


//Cart 
Route::get('/cart/{item}', 'CartController@store');
Route::get('/cart/delete/{item}', [
    'uses' => 'CartController@destroy',
    'as'   => 'cart.delete'
]);

Route::get('/cart/update/{item}', [
    'uses' => 'CartController@update',
    'as'   => 'cart.update'
]);


Route::get('order/create', 'OrderController@store');

//Admin routes

//Logged in admin cannot access or send requests these pages
Route::group(['middleware' => 'authenticated_admin'], function()
{

Route::get('admin_login', "AdminAuth\LoginController@showLoginForm");
Route::post('admin_login', 'AdminAuth\LoginController@login');
//Route::get('/admin_register', 'AdminAuth\RegisterController@showRegistrationForm');
//Route::post('/admin_register', 'AdminAuth\RegisterController@register');
});


//Only logged in admin can access or send requests to these pages

//Route::group(['middleware' => 'guest_admin'], function()
Route::get('/admin_dashboard', function(){
	return view('admin.dashboard');
});
Route::get('/admin_register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('/admin_register', 'AdminAuth\RegisterController@register');
Route::post('admin_logout', 'AdminAuth\LoginController@logout');
Route::get('/all_menus', 'AdminAuth\MenuController@index');
Route::get('menus/create', 'AdminAuth\MenuController@create');
Route::post('/menus', 'AdminAuth\MenuController@store');
Route::get('/menus/delete/{menu}', 'AdminAuth\MenuController@destroy');
Route::get('/menus/update/{menu}', 'AdminAuth\MenuController@edit');
Route::put('/menu/{menu}', 'AdminAuth\MenuController@update');
Route::get('/orders', 'AdminAuth\OrderController@index');
//});
