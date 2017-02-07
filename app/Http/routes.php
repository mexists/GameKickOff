<?php
/*
|--------------------------------------------------------------------------
| Routes Examples
|--------------------------------------------------------------------------
| Route::get('/resource',                 ['as' => 'resource.index',      'uses' => 'ResourceController@index'    ]);
| Route::get('/resource/create',          ['as' => 'resource.create',     'uses' => 'ResourceController@create'   ]);
| Route::post('/resource',                ['as' => 'resource.store',      'uses' => 'ResourceController@store'    ]);
| Route::get('/resource/{resource}',      ['as' => 'resource.show',       'uses' => 'ResourceController@show'     ]);
| Route::get('/resource/{resource}/edit', ['as' => 'resource.edit',       'uses' => 'ResourceController@edit'     ]);
| Route::put('/resource/{resource}',      ['as' => 'resource.update',     'uses' => 'ResourceController@update'   ]);
| Route::delete('/resource/{resource}',   ['as' => 'resource.destroy',    'uses' => 'ResourceController@destroy'  ]);
*/

Route::group(['middleware' => ['web']], function () {
	Route::group(['prefix'=>'json', 'middleware' => 'cors'], function(){
		Route::get('login', 'JsonController@login');
		Route::post('login', 'JsonController@postLogin');
	});
	Route::group(['prefix'=>'api', 'middleware' => 'cors'], function(){
		Route::post('smsSend', 'ApiController@smsSend');
	});
	/*
	|--------------------------------------------------------------------------
	| Testing Route
	|--------------------------------------------------------------------------
	*/
	Route::match(['GET', 'POST'], 'test', ['as' => 'test', 'uses' => function () {
		$StationLog = \App\StationLog::orderBy('id', 'desc')->first();
		$Station = \App\Station::find($StationLog->station_id);
		$River = \App\River::find($Station->river_id);
		$State = \App\State::find($River->state_id);

		$datetime = \Carbon\Carbon::now()->format('D,d/m/y h:ia');

		$msg = "[UPDATE] $datetime\nStation($Station->number): $Station->name, $State->name
Water Level: {$Station->river_level}M
Temperature: {$StationLog->temperature}°C";
		dd($msg);
		/*
		|--------------------------------------------------------------------------
		| Image Intervention example
		|--------------------------------------------------------------------------
		*/
		/*//image resize
		$img_path = public_path('uploads'). DIRECTORY_SEPARATOR . 'qv_large_1.JPG';
		$img_small = Image::make($img_path)->fit(Config::get('gravatar.item.small.width'), Config::get('gravatar.item.small.height'));
		$img_medium = Image::make($img_path)->fit(Config::get('gravatar.item.medium.width'), Config::get('gravatar.item.medium.height'));
		$img_large = Image::make($img_path)->fit(Config::get('gravatar.item.large.width'), Config::get('gravatar.item.large.width'));
		return $img_medium->response(Image::make($img_path)->mime());*/

		/* upload & view files
		 * */
		/*if (Request::isMethod('post'))
			foreach (Request::file('image') as $image)
				Storage::put("public/{$image->getClientOriginalName()}", Image::make($image)->stream());//dump(Image::make($image)->save(public_path('uploads/') . $image->getClientOriginalName())->basename);
		echo Form::open(['route' => ['upload'], 'files' => true, 'enctype' => 'multipart/form-data']);
		echo Form::label('image', 'Choose File : ');
		echo Form::file('image[]', ['class' => 'custom-file-input', 'multiple' => 'multiple']);
		echo Form::submit('Upload Image', [ 'class' => 'btn btn-default' ]);
		echo Form::close();*/

		// image call
		/*header("Content-type: image/jpeg");
		echo Storage::get('public/Hydrangeas.jpg');
		// or
		echo "<img src='data:image/jpeg;base64," . base64_encode(Storage::get('public/Hydrangeas.jpg')) . "'>"; */
	}]);

	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	/**
	 * Model binding into route
	 */
	Route::model('blogcategory', 'App\BlogCategory');
	Route::model('blog', 'App\Blog');
	Route::model('file', 'App\File');
	Route::model('task', 'App\Task');
	Route::model('users', 'App\User');

	Route::pattern('slug', '[a-z0-9- _]+');

	# rap2hpoutre/laravel-log-viewer
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
	# payment gateway
	Route::group(['prefix' => 'payment', /*'middleware' => 'SentinelUser'*/], function () {
		Route::get('checkout', 'PaymentController@checkout');
		Route::post('checkout', 'PaymentController@postCheckout');
		Route::get('transaction/{id}', 'PaymentController@transaction');
	});
	# sms gateway
	Route::group(['prefix' => 'sms'], function () {
		Route::post('listener', 'TwilioSMSController@listener');
	});
	# push notification
	Route::group(['prefix' => 'push'], function () {
		Route::get('send', 'PushNotificationController@send');
		Route::post('store', 'PushNotificationController@store');
	});
	# account
	Route::get('confirm', 'AccountController@confirm');
	Route::post('confirm', 'AccountController@postConfirm');
	Route::get('reset', 'AccountController@reset');
	Route::post('reset', 'AccountController@postReset');
	# crontab task scheduler
	Route::get('cron/run', 'CrontabController@run');


	Route::group(['prefix' => 'admin'], function () {

		# Error pages should be shown without requiring login
		Route::get('404', function () {
			return View('admin/404');
		});
		Route::get('500', function () {
			return View::make('admin/500');
		});

		# Lock screen
		Route::get('lockscreen', function () {
			return View::make('admin/lockscreen');
		});

		# All basic routes defined here
		Route::get('signin', ['as' => 'signin', 'uses' => 'AuthController@getSignin']);
		Route::post('signin', 'AuthController@postSignin');
		Route::post('signup', ['as' => 'signup', 'uses' => 'AuthController@postSignup']);
		Route::post('forgot-password', ['as' => 'forgot-password', 'uses' => 'AuthController@postForgotPassword']);
		Route::get('login2', function () {
			return View::make('admin/login2');
		});

		# Register2
		Route::get('register2', function () {
			return View::make('admin/register2');
		});
		Route::post('register2', ['as' => 'register2', 'uses' => 'AuthController@postRegister2']);

		# Forgot Password Confirmation
		Route::get('forgot-password/{userId}/{passwordResetCode}', ['as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm']);
		Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

		# Logout
		Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);

		# Account Activation
		Route::get('activate/{userId}/{activationCode}', ['as' => 'activate', 'uses' => 'AuthController@getActivate']);
	});

	Route::group(['prefix' => 'admin', 'middleware' => 'SentinelAdmin'], function () {
		# Dashboard / Index
		Route::get('/', ['as' => 'dashboard', 'uses' => 'JoshController@showHome']);


		# User Management
		Route::group(['prefix' => 'users'], function () {
			Route::get('/', ['as' => 'users', 'uses' => 'UsersController@index']);
			Route::get('create', 'UsersController@create');
			Route::post('create', 'UsersController@store');
			Route::get('{userId}/delete', ['as' => 'delete/user', 'uses' => 'UsersController@destroy']);
			Route::get('{userId}/confirm-delete', ['as' => 'confirm-delete/user', 'uses' => 'UsersController@getModalDelete']);
			Route::get('{userId}/restore', ['as' => 'restore/user', 'uses' => 'UsersController@getRestore']);
			Route::get('{userId}', ['as' => 'users.show', 'uses' => 'UsersController@show']);
			Route::post('passwordreset', 'UsersController@passwordreset');
		});
		Route::resource('users', 'UsersController');

		Route::get('deleted_users', ['as' => 'deleted_users', 'before' => 'Sentinel', 'uses' => 'UsersController@getDeletedUsers']);

		# Group Management
		Route::group(['prefix' => 'groups'], function () {
			Route::get('/', ['as' => 'groups', 'uses' => 'GroupsController@index']);
			Route::get('create', ['as' => 'create/group', 'uses' => 'GroupsController@create']);
			Route::post('create', 'GroupsController@store');
			Route::get('{groupId}/edit', ['as' => 'update/group', 'uses' => 'GroupsController@edit']);
			Route::post('{groupId}/edit', 'GroupsController@update');
			Route::get('{groupId}/delete', ['as' => 'delete/group', 'uses' => 'GroupsController@destroy']);
			Route::get('{groupId}/confirm-delete', ['as' => 'confirm-delete/group', 'uses' => 'GroupsController@getModalDelete']);
			Route::get('{groupId}/restore', ['as' => 'restore/group', 'uses' => 'GroupsController@getRestore']);
		});
		/*routes for blog*/
		Route::group(['prefix' => 'blog'], function () {
			Route::get('/', ['as' => 'blogs', 'uses' => 'BlogController@index']);
			Route::get('create', ['as' => 'create/blog', 'uses' => 'BlogController@create']);
			Route::post('create', 'BlogController@store');
			Route::get('{blog}/edit', ['as' => 'update/blog', 'uses' => 'BlogController@edit']);
			Route::post('{blog}/edit', 'BlogController@update');
			Route::get('{blog}/delete', ['as' => 'delete/blog', 'uses' => 'BlogController@destroy']);
			Route::get('{blog}/confirm-delete', ['as' => 'confirm-delete/blog', 'uses' => 'BlogController@getModalDelete']);
			Route::get('{blog}/restore', ['as' => 'restore/blog', 'uses' => 'BlogController@getRestore']);
			Route::get('{blog}/show', ['as' => 'blog/show', 'uses' => 'BlogController@show']);
			Route::post('{blog}/storecomment', ['as' => 'restore/blog', 'uses' => 'BlogController@storecomment']);
		});

		/*routes for blog category*/
		Route::group(['prefix' => 'blogcategory'], function () {
			Route::get('/', ['as' => 'blogcategories', 'uses' => 'BlogCategoryController@index']);
			Route::get('create', ['as' => 'create/blogcategory', 'uses' => 'BlogCategoryController@create']);
			Route::post('create', 'BlogCategoryController@store');
			Route::get('{blogcategory}/edit', ['as' => 'update/blogcategory', 'uses' => 'BlogCategoryController@edit']);
			Route::post('{blogcategory}/edit', 'BlogCategoryController@update');
			Route::get('{blogcategory}/delete', ['as' => 'delete/blogcategory', 'uses' => 'BlogCategoryController@destroy']);
			Route::get('{blogcategory}/confirm-delete', ['as' => 'confirm-delete/blogcategory', 'uses' => 'BlogCategoryController@getModalDelete']);
			Route::get('{blogcategory}/restore', ['as' => 'restore/blogcategory', 'uses' => 'BlogCategoryController@getRestore']);
		});

		/*routes for file*/
		Route::group(['prefix' => 'file'], function () {
			Route::post('create', 'FileController@store');
			Route::post('createmulti', 'FileController@postFilesCreate');
			Route::delete('delete', 'FileController@delete');
		});

		Route::get('crop_demo', function () {
			return redirect('admin/imagecropping');
		});
		Route::post('crop_demo', 'JoshController@crop_demo');

		/* laravel example routes */
		# datatables
		Route::get('datatables', 'DataTablesController@index');
		Route::get('datatables/data', ['as' => 'admin.datatables.data', 'uses' => 'DataTablesController@data']);

		//tasks section
		Route::post('task/create', 'TaskController@store');
		Route::get('task/data', 'TaskController@data');
		Route::post('task/{task}/edit', 'TaskController@update');
		Route::post('task/{task}/delete', 'TaskController@delete');


		# Remaining pages will be called from below controller method
		# in real world scenario, you may be required to define all routes manually

		Route::get('{name?}', 'JoshController@showView');

	});

#FrontEndController
	Route::get('login', ['as' => 'login', 'uses' => 'FrontEndController@getLogin']);
	Route::post('login', 'FrontEndController@postLogin');
	Route::get('register', ['as' => 'register', 'uses' => 'FrontEndController@getRegister']);
	Route::post('register', 'FrontEndController@postRegister');
	Route::get('activate/{userId}/{activationCode}', ['as' => 'activate', 'uses' => 'FrontEndController@getActivate']);
	Route::get('forgot-password', ['as' => 'forgot-password', 'uses' => 'FrontEndController@getForgotPassword']);
	Route::post('forgot-password', 'FrontEndController@postForgotPassword');
# Forgot Password Confirmation
	Route::get('forgot-password/{userId}/{passwordResetCode}', ['as' => 'forgot-password-confirm', 'uses' => 'FrontEndController@getForgotPasswordConfirm']);
	Route::post('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@postForgotPasswordConfirm');
# My account display and update details
	Route::group(['middleware' => 'SentinelUser'], function () {
		Route::get('my-account', ['as' => 'my-account', 'uses' => 'FrontEndController@myAccount']);
		Route::put('my-account', 'FrontEndController@update');

		Route::get('token/list', 'FrontEndController@getTokens');
	});
	Route::get('logout', ['as' => 'logout', 'uses' => 'FrontEndController@getLogout']);
# contact form
	Route::post('contact', ['as' => 'contact', 'uses' => 'FrontEndController@postContact']);

#frontend views
	Route::get('/', ['as' => 'home', function () {
		return View::make('index');
	}]);

	Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@getIndexFrontend']);
	Route::get('blog/{slug}/tag', 'BlogController@getBlogTagFrontend');
	Route::get('blogitem/{slug?}', 'BlogController@getBlogFrontend');
	Route::post('blogitem/{blog}/comment', 'BlogController@storeCommentFrontend');

	Route::get('{name?}', 'JoshController@showFrontEndView');
# End of frontend views

});

