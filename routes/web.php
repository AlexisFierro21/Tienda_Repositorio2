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
 Route::bind('librooo',function($id){
 	return App\Librooo::where('id',$id)->first();
 });
Route::get('/', [
	'as'=>'inicio',
	'uses'=>'StoreController@index']);
Route::get('librooo/{id}',[
		'as'=>'libro-deta',
	'uses' =>'StoreController@show']);
//Carrito-------------
Route::get('cart/show',[
	'as' => 'cart-show',
	'uses'=>'CartController@show'
	]);
//Agregar item al carro
Route::get('cart/add/{librooo}',[
'as'=> 'cart-add',
'uses'=> 'CartController@add'
	]);
Route::get('cart/delete/{librooo}',[
'as'=>'cart-delete',
'uses'=>'CartController@delete'
	]);
Route::get('cart/trash/',[
'as'=>'cart-trash',
'uses'=>'CartController@trash'
	]);
//Auth::routes();
//-----------------------------------Routes para el Login y Registro de usuarios
Route::post('auth/login',[
	'as'=>'login-post',
	'uses'=>'Auth\LoginController@login'
	]);
Route::get('auth/login',[
	'as'=>'login-get',
	'uses'=>'Auth\LoginController@showLoginForm'
	]);
/*Route::get('/',[
'as'=>'logout',
'uses'=>'Auth\LoginController@Logout'
	]);*/
//-----------------------------Registracion Rutas------------------- Usuario
Route::get('auth/register/usuerio',[
	'as'=>'user-register',
	'uses'=>'Auth\RegisterController@showRegistrationForm'
	]);
Route::post('auth/register/usuario',[
	'as'=>'register-post',
	'uses'=>'Auth\RegisterController@register'
	]);

Route::get('/home', 'HomeController@index')->name('home');
