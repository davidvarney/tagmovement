<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('layouts.app');
});*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    /*Route::get('/', function () {
        return view('layouts.app');
    });*/
    Route::get('/', array('as' => 'home', 'uses' => 'HomeController@home'));

    Route::get('admin', array('as' => 'admin_index', 'uses' => 'Admin\AdminController@index'));

    // CONTACT FORM
    Route::post('contact', array('as' => 'contact_post', 'uses' => 'ContactController@store'));
    // REGISTRATION FORM
    Route::post('registration', array('as' => 'registration_store', 'uses' => 'RegistrationController@store'));

    // Admin Routes

    // Admin Users
    Route::get('admin/users', array('as' => 'admin_users_index', 'uses' => 'Admin\UsersController@index', 'middleware' => 'permission:can_view_users'));
    Route::get('admin/users/create', array('as' => 'admin_users_create', 'uses' => 'Admin\UsersController@create', 'middleware' => 'permission:can_add_users'));
    Route::post('admin/users/store', array('as' => 'admin_users_store', 'uses' => 'Admin\UsersController@store', 'middleware' => 'permission:can_add_users'));
    Route::get('admin/users/{user_id}/edit', array('as' => 'admin_users_edit', 'uses' => 'Admin\UsersController@edit', 'middleware' => 'permission:can_edit_users'));
    Route::put('admin/users/{user_id}/update', array('as' => 'admin_users_update', 'uses' => 'Admin\UsersController@update', 'middleware' => 'permission:can_edit_users'));
    Route::delete('admin/users/{user_id}/destroy', array('as' => 'admin_users_destroy', 'uses' => 'Admin\UsersController@destroy', 'middleware' => 'permission:can_delete_users'));

    // Admin Registrations
    //Route::get('admin/users', array('as' => 'admin_users_index', 'uses' => 'Admin\UsersController@index'));
});
