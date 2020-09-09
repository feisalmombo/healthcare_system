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

//ROUTES FOR /
Route::get('/', function () {
	if (Auth::user()) {
		return redirect()->back();
	}
	return view('auth.login');
});

//ROUTES FOR LOGIN AND LOGOUT
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/change_password',function(){
	return view('auth.passwords.new_user_change_pwd');
});

//ROUTES FOR UPDATE NEW USER PASSWORD
Route::post('/change_password','ChangePasswordController@updateNewuser');

//MIDDLEWARE FOR CHECK USER STATUS
Route::group(['middleware'=>'CheckUserStatus'],function(){

	//MIDDLEWARE FOR VALIDATE BACK BUTTON TO THE BROWSER
	Route::group(['middleware' => 'ValidateButtonHistory'], function() {


		Route::group(['middleware' => 'auth'], function(){

			//ROUTES FOR HOME
			Route::get('/home', 'HomeController@index')->name('home');

			//ROUTES FOR VIEW USERS
			Route::resource('/view-users', 'ViewUsersController');
			Route::post('/view-users', 'ViewUsersController@store');
			Route::get('/reset/{id}','ViewUsersController@resetpwd');


			//ROUTES FOR VIEW RECEPTIONS
			Route::resource('/view-receptions','ReceptionsController');
			Route::post('/view-receptions', 'ReceptionsController@store');


			//ROUTES FOR CHANGE PASSWORD
			Route::resource('/change-password', 'ChangePasswordController');
			Route::post('/change-password', 'ChangePasswordController@update');


			//ROUTES FOR VIEW USERS PDF AND EXCEL
			Route::post('/view-users/report/pdf/{view_type}', 'ViewUsersController@report');
			Route::post('/view-users/report/excel/{view_type}', 'ViewUsersController@downloadExcel');

			//ROUTES FOR PERMISSIONS
			//Call entrust users view
			Route::get('/settings/manage_users/permissions/entrust_user','PermissionsController@entrust_user');
			//Get all permissions for specific user
			Route::get('/settings/manage_users/permissions/entrust','PermissionsController@entrust');
			//Entrust user route
			Route::post('/settings/manage_users/permissions/entrust_usr','PermissionsController@entrust_user_permissions');
			//get permission for role
			Route::get('/settings/manage_users/permissions/entrustRole','PermissionsController@entrust_roles');
			//Route to entrust permissions to the role
			Route::post('/settings/manage_users/permissions/entrust_role_permissions','PermissionsController@entrust_role_permissions');
			//call roles view
			Route::get('/settings/manage_users/permissions/entrust_role','PermissionsController@entrust_role');
			Route::resource('/settings/manage_users/permissions/','PermissionsController');

			//ROUTES FOR ROLES
			Route::get('/settings/manage_users/roles/entrust','RolesController@get_roles');
			Route::post('/settings/manage_users/roles/entrust','RolesController@post_roles');
			Route::get('/settings/manage_users/roles/add','RolesController@add');
			Route::resource('/settings/manage_users/roles','RolesController');

		});

	});
});
