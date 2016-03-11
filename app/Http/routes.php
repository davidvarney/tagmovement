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
    Route::get('register', array('uses' => 'HomeController@home'));
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

    // Admin Events
    Route::get('admin/events', array('as' => 'admin_events_index', 'uses' => 'Admin\EventsController@index', 'middleware' => 'permission:can_view_events'));
    Route::get('admin/events/create', array('as' => 'admin_events_create', 'uses' => 'Admin\EventsController@create', 'middleware' => 'permission:can_add_events'));
    Route::post('admin/events/store', array('as' => 'admin_events_store', 'uses' => 'Admin\EventsController@store', 'middleware' => 'permission:can_add_events'));
    Route::get('admin/events/{event_id}/edit', array('as' => 'admin_events_edit', 'uses' => 'Admin\EventsController@edit', 'middleware' => 'permission:can_edit_events'));
    Route::put('admin/events/{event_id}/update', array('as' => 'admin_events_update', 'uses' => 'Admin\EventsController@update', 'middleware' => 'permission:can_edit_events'));
    Route::delete('admin/events/{event_id}/destroy', array('as' => 'admin_events_destroy', 'uses' => 'Admin\EventsController@destroy', 'middleware' => 'permission:can_delete_events'));

    // Admin Stations
    Route::get('admin/stations', array('as' => 'admin_stations_index', 'uses' => 'Admin\StationsController@index', 'middleware' => 'permission:can_view_stations'));
    Route::get('admin/stations/create', array('as' => 'admin_stations_create', 'uses' => 'Admin\StationsController@create', 'middleware' => 'permission:can_add_stations'));
    Route::post('admin/stations/store', array('as' => 'admin_stations_store', 'uses' => 'Admin\StationsController@store', 'middleware' => 'permission:can_add_stations'));
    Route::get('admin/stations/{station_id}/edit', array('as' => 'admin_stations_edit', 'uses' => 'Admin\StationsController@edit', 'middleware' => 'permission:can_edit_stations'));
    Route::put('admin/stations/{station_id}/update', array('as' => 'admin_stations_update', 'uses' => 'Admin\StationsController@update', 'middleware' => 'permission:can_edit_stations'));
    Route::delete('admin/stations/{station_id}/destroy', array('as' => 'admin_stations_destroy', 'uses' => 'Admin\StationsController@destroy', 'middleware' => 'permission:can_delete_stations'));

    // Admin Registrations
    Route::get('admin/registrations', array('as' => 'admin_registrations_index', 'uses' => 'Admin\RegistrationController@index', 'middleware' => 'permission:can_view_registrations'));

    // Admin Athletes
    Route::get('admin/athletes', array('as' => 'admin_athletes_index', 'uses' => 'Admin\AthletesController@index', 'middleware' => 'permission:can_view_athletes'));
    Route::post('admin/athletes/store', array('as' => 'admin_athletes_store', 'uses' => 'Admin\AthletesController@store', 'middleware' => 'permission:can_add_athletes'));

    // Admin Station Data
    Route::get('admin/station_data', array('as' => 'admin_station_data_index', 'uses' => 'Admin\StationDataController@index', 'middleware' => 'permission:can_view_station_data'));
    Route::get('admin/station_data/create', array('as' => 'admin_station_data_create', 'uses' => 'Admin\StationDataController@create', 'middleware' => 'permission:can_add_station_data'));
    Route::post('admin/station_data/store', array('as' => 'admin_station_data_store', 'uses' => 'Admin\StationDataController@store', 'middleware' => 'permission:can_add_station_data'));
    Route::get('admin/station_data/{station_data_id}/edit', array('as' => 'admin_station_data_edit', 'uses' => 'Admin\StationDataController@edit', 'middleware' => 'permission:can_edit_station_data'));
    Route::put('admin/station_data/{station_data_id}/update', array('as' => 'admin_station_data_update', 'uses' => 'Admin\StationDataController@update', 'middleware' => 'permission:can_edit_station_data'));
    Route::delete('admin/station_data/{station_data_id}/destroy', array('as' => 'admin_station_data_destroy', 'uses' => 'Admin\StationDataController@destroy', 'middleware' => 'permission:can_delete_station_data'));

    // Admin Newsletter
    Route::get('admin/newsletter_subscribers', array('as' => 'admin_newsletter_subscribers_index', 'uses' => 'Admin\NewsletterSubscribersController@index', 'middleware' => 'permission:can_view_newsletter'));
    Route::post('admin/newsletter_subscribers/store', array('as' => 'admin_newsletter_subscribers_store', 'uses' => 'Admin\NewsletterSubscribersController@store', 'middleware' => 'permission:can_add_newsletter'));
    Route::post('admin/newsletter_subscribers/{newsletter_subscriber_id}/unsubscribe', array('as' => 'admin_newsletter_subscribers_unsubscribe', 'uses' => 'Admin\NewsletterSubscribersController@unsubscribe', 'middleware' => 'permission:can_edit_newsletter'));
    Route::delete('admin/newsletter_subscribers/{newsletter_subscriber_id}/delete', array('as' => 'admin_newsletter_subscribers_destroy', 'uses' => 'Admin\NewsletterSubscribersController@destroy', 'middleware' => 'permission:can_delete_newsletter'));
});
