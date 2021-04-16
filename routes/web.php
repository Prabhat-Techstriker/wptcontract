<?php
Route::redirect('/', 'dashboard');

Auth::routes(['register' => false]);

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

Route::group(['middleware' => ['auth'], 'prefix' => '', 'as' => 'admin.'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::delete('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'Admin\RolesController');
    Route::delete('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    Route::resource('users', 'Admin\UsersController');
    Route::delete('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');
    Route::resource('contacts', 'ContactsController');
    Route::delete('contact_mass_destroy', 'ContactsController@massDestroy')->name('contacts.mass_destroy');

    Route::get('contracts/sent', 'ContractsController@sent')->name('contracts.sent');
    Route::post('contracts/getDatabyId', 'ContractsController@getDatabyId')->name('contracts.getDatabyId');
    Route::post('contracts/getProjectportrybyId', 'ContractsController@getProjectportrybyId')->name('contracts.getProjectportrybyId');

    Route::get('contracts/completed', 'ContractsController@completed')->name('contracts.completed');
    Route::resource('contracts', 'ContractsController');

    Route::resource('sellers', 'SellersController');

    Route::delete('sellers_mass_destroy', 'SellersController@massDestroy')->name('sellers.mass_destroy');
    Route::delete('contracts_mass_destroy', 'ContractsController@massDestroy')->name('contracts.mass_destroy');

    Route::post('projects/addProperty', 'ProjectTypesController@addProperty')->name('projects.addProperty');;
    Route::post('property/', 'ProjectTypesController@editProperty')->name('property.editProperty');;
    Route::post('property/update', 'ProjectTypesController@updateProperty')->name('property.updateProperty');;
    Route::post('property/detetedProperty', 'ProjectTypesController@detetedProperty')->name('property.detetedProperty');;
    Route::resource('projects', 'ProjectTypesController');



    Route::delete('projects_mass_destroy', 'ProjectTypesController@massDestroy')->name('projects.mass_destroy');
});