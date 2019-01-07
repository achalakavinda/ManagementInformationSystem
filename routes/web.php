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
	return redirect('/dashboard');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/staff/profile/{id}', 'StaffController@profile');

    Route::get('/staff/work-sheet', 'PageController@workSheet');
    Route::post('/staff/work-sheet/store', 'PageController@workSheetStore');

    Route::group(['middleware' => ['permission:Default']], function () {

        Route::resource('work-sheet', 'WorkSheetController');

        Route::resource('/customer', 'CustomerController');

        Route::resource('/staff', 'StaffController');

        Route::resource('job-type', 'JobTypeController');

        Route::resource('designation','DesignationController');

        Route::resource('project','ProjectController');

        Route::get('project/{id}/estimation','ProjectController@estimation');

        Route::get('project/{id}/actual-cost','ProjectController@actualCost');

        Route::post('project/finalized','ProjectController@finalized');

    });

    Route::group(['middleware' => ['permission:Settings']], function () {

        Route::get('settings','SettingController@index');

        Route::prefix('settings')->group(function () {

            Route::get('/','SettingController@index');
            Route::get('/access-control','AccessControlController@index');
            Route::Resource('/access-control/permissions','PermissionsController');
            Route::Resource('/access-control/roles','RolesController');
            Route::Resource('/access-control/user-management','UserManagementController');

        });

    });

});
