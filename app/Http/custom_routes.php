<?php

/* custom routes generated by CRUD */
Route::group(array('prefix' => 'admin', 'middleware' => 'SentinelAdmin'), function () {Route::resource('rivers', 'RiversController');
	Route::get('rivers/{id}/delete', array('as' => 'admin.rivers.delete', 'uses' => 'RiversController@getDelete'));
	Route::get('rivers/{id}/confirm-delete', array('as' => 'admin.rivers.confirm-delete', 'uses' => 'RiversController@getModalDelete'));
});

Route::group(array('prefix' => 'admin', 'middleware' => 'SentinelAdmin'), function () {Route::resource('stations', 'StationsController');
	Route::get('stations/{id}/delete', array('as' => 'admin.stations.delete', 'uses' => 'StationsController@getDelete'));
	Route::get('stations/{id}/confirm-delete', array('as' => 'admin.stations.confirm-delete', 'uses' => 'StationsController@getModalDelete'));
});

Route::group(array('prefix' => 'admin', 'middleware' => 'SentinelAdmin'), function () {Route::resource('station_logs', 'StationLogsController');
	Route::get('station_logs/{id}/delete', array('as' => 'admin.station_logs.delete', 'uses' => 'StationLogsController@getDelete'));
	Route::get('station_logs/{id}/confirm-delete', array('as' => 'admin.station_logs.confirm-delete', 'uses' => 'StationLogsController@getModalDelete'));
});

Route::group(array('prefix' => 'admin', 'middleware' => 'SentinelAdmin'), function () {Route::resource('phones', 'PhonesController');
	Route::get('phones/{id}/delete', array('as' => 'admin.phones.delete', 'uses' => 'PhonesController@getDelete'));
	Route::get('phones/{id}/confirm-delete', array('as' => 'admin.phones.confirm-delete', 'uses' => 'PhonesController@getModalDelete'));
});
