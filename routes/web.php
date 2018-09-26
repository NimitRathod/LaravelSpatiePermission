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
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth'],'prefix' => '/'], function(){

	// dashborad
    Route::resource('/admin','DashboradController');

    // User Role and Permission
    Route::resource('roles','Custom\RoleController');
    Route::resource('users','Custom\UserController');
    Route::resource('user_permission','Custom\PermissionController');

    Route::get('/student',function(){
    	return view('admin.pages.student.index');
    });

});