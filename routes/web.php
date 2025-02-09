<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('audit-logs/destroy', 'AuditLogsController@massDestroy')->name('audit-logs.massDestroy');

    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    Route::delete('currencies/destroy', 'CurrencyController@massDestroy')->name('currencies.massDestroy');

    Route::resource('currencies', 'CurrencyController');

    Route::delete('transaction-types/destroy', 'TransactionTypeController@massDestroy')->name('transaction-types.massDestroy');

    Route::resource('transaction-types', 'TransactionTypeController');

    Route::delete('income-sources/destroy', 'IncomeSourceController@massDestroy')->name('income-sources.massDestroy');

    Route::resource('income-sources', 'IncomeSourceController');

    Route::delete('client-statuses/destroy', 'ClientStatusController@massDestroy')->name('client-statuses.massDestroy');

    Route::resource('client-statuses', 'ClientStatusController');

    Route::delete('project-statuses/destroy', 'ProjectStatusController@massDestroy')->name('project-statuses.massDestroy');

    Route::resource('project-statuses', 'ProjectStatusController');

    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');

    Route::resource('clients', 'ClientController');

    Route::delete('projects/destroy', 'ProjectController@massDestroy')->name('projects.massDestroy');

    Route::resource('projects', 'ProjectController');

    Route::delete('notes/destroy', 'NoteController@massDestroy')->name('notes.massDestroy');

    Route::resource('notes', 'NoteController');

    Route::delete('documents/destroy', 'DocumentController@massDestroy')->name('documents.massDestroy');

    Route::resource('documents', 'DocumentController');

    Route::post('documents/media', 'DocumentController@storeMedia')->name('documents.storeMedia');

    Route::delete('transactions/destroy', 'TransactionController@massDestroy')->name('transactions.massDestroy');

    Route::resource('transactions', 'TransactionController');

    Route::delete('client-reports/destroy', 'ClientReportController@massDestroy')->name('client-reports.massDestroy');

    Route::resource('client-reports', 'ClientReportController');

    Route::delete('time-work-types/destroy', 'TimeWorkTypeController@massDestroy')->name('time-work-types.massDestroy');

    Route::resource('time-work-types', 'TimeWorkTypeController');

    Route::delete('time-projects/destroy', 'TimeProjectController@massDestroy')->name('time-projects.massDestroy');

    Route::resource('time-projects', 'TimeProjectController');

    Route::delete('time-entries/destroy', 'TimeEntryController@massDestroy')->name('time-entries.massDestroy');

    Route::resource('time-entries', 'TimeEntryController');

    Route::delete('time-reports/destroy', 'TimeReportController@massDestroy')->name('time-reports.massDestroy');

    Route::resource('time-reports', 'TimeReportController');
});
