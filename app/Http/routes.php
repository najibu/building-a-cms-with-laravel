
<?php

Route::controller('auth/password', 'Auth\PasswordController', [
    'getEmail' => 'auth.password.email',
    'getReset' => 'auth.password.reset'
]);

Route::controller('auth', 'Auth\AuthController', [
	'getLogin' => 'auth.login',
	'getLogout' => 'auth.logout'
]);

Route::get('backend/dashboard', ['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index']);

Route::get('/', function () {
    return view('welcome');
});

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
    //
});
