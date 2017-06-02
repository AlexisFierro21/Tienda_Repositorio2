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
 //--------------------------Controlador Empresaa
 Route::get('editorial/',[
'as'=>'inicio-edi',
'uses'=>'empresaController@index']);
 Route::get('editorial/delete/{id}',[
'as'=>'edit-delete',
'uses'=>'empresaController@delete'
 	]);
 Route::get('editorial/agregar',[
'as'=>'agregar-libro',
'uses'=>'empresaController@showForm'
 	]);
 Route::post('editorial/agregar/librit',[
'as'=>'add-libro',
'uses'=>'empresaController@agregar'
 	]);
 Route::get('editorial/logout',[
'as'=>'Logout-edi',
'uses'=>'empresalogin@logout'
 	]);
//------------------------------Controlador Tienda
Route::get('/', [
	'as'=>'inicio',
	'uses'=>'StoreController@index']);
Route::get('librooo/{id}',[
		'as'=>'libro-deta',
	'uses' =>'StoreController@show']);
Route::get('cuenta',[
'as'=>'cuenta',
'uses'=>'StoreController@showCuenta'
	]);
Route::get('historial',[
'as'=>'historial',
'uses'=>'StoreController@showhistorial'
	]);
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

Route::get('/logout',[
'as'=>'logout',
'uses'=>'Auth\LoginController@logout'
	]);
/*Route::get('/',[
'as'=>'logout',
'uses'=>'Auth\LoginController@Logout'
	]);*/
//-----------------------------Registracion Rutas------------------- Usuario
Route::get('auth/register/usuario',[
	'as'=>'user-register',
	'uses'=>'Auth\RegisterController@showRegistrationForm'
	]);
Route::post('auth/register/usuario',[
	'as'=>'register-post',
	'uses'=>'Auth\RegisterController@register'
	]);

//Routas para el inicio de sesion de empresas y registro de empresas
Route::get('empresa/login',[
	'as'=>'empresa-show',
	'uses'=>'empresalogin@showLoginForm'
	]);
Route::post('empresa/login',[
	'as'=>'empresa-post',
	'uses'=>'empresalogin@login'
	]);

Route::get('auth/register/empresa',[
	'as'=>'empresa-register',
	'uses'=>'empregaregister@showRegistrationForm'
	]);
Route::post('auth/register/empresa',[
	'as'=>'edit-register',
	'uses'=>'empregaregister@register'
	]);

//Route::get('/home', 'HomeController@index')->name('inicio');

Auth::routes();
// Paypal
// Enviamos nuestro pedido a PayPal
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));
// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));

Route::get('/home', 'HomeController@index')->name('home');
