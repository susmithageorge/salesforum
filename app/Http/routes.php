<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
   $types=DB::table('user_types')->lists('name','id');
   return View::make('index',array('types'=>$types));
});
Route::get('adminindex',array('as' => 'adminindex', 'uses' =>'AdminController@index'));
Route::post('adminlogin',array('as' => 'adminlogin' , 'uses' => 'AdminController@login'));
//Route::get('/auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
Route::get('newadmin',array('as' => 'newadmin' , 'uses' => 'UserController@newadmin'));
Route::post('newadmin/newadminregistration',array('as' => 'newadminregistration' , 'uses' => 'UserController@newadminregistration'));
Route::get('adminhome/users',array('as' => 'adminusers', 'uses' =>'AdminController@usersindex'));
Route::get('admin/{id}/adminuserseditview',array('as' => 'adminuserseditview', 'uses' =>'AdminController@userseditview'));
Route::get('admin/{id}/adminmanufacturerseditview',array('as' => 'adminmanufacturerseditview', 'uses' =>'AdminController@manufacturerseditview'));
Route::get('admin/{id}/adminusersdelete',array('as' => 'adminusersdelete', 'uses' =>'UserController@usersdelete'));
Route::get('admin/users/adduserview',array('as' =>'adminuseraddview','uses'=>'AdminController@adduserview'));
Route::get('admin/manufacturers',array('as' =>'adminmanufacturers','uses'=>'AdminController@manufacturersindex'));
Route::post('admin/users/adduser',array('as'=>'adminuseradd','uses'=>'UserController@newuserregistration'));
Route::post('admin/users/{id}/updateuser',array('as'=>'adminuserupdate','uses'=>'AdminController@adminupdateuser'));
Route::get('/test',array('as' => 'test', 'uses' =>'AdminController@test'));
Route::get('/test1',array('as' => 'test1', 'uses' =>'AdminController@importdealers'));