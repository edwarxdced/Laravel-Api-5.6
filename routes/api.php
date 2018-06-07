<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api) {
    $api->group(['middleware' => ['auth:api'], 'namespace' => 'App\Http\Controllers'], function($api) {
        $api->group(['prefix' => 'me'], function($api) {
            $api->get('/', 'Users\ProfileController@index');
            $api->put('/', 'Users\ProfileController@update');
            $api->patch('/', 'Users\ProfileController@update');
            $api->put('/password', 'Users\ProfileController@updatePassword');
        });

        $api->group(['prefix' => 'users'], function ($api) {
            $api->get('/', 'Users\UsersController@index');
            $api->get('/{uuid}', 'Users\UsersController@show');
            $api->put('/{uuid}', 'Users\UsersController@update');
            $api->patch('/{uuid}', 'Users\UsersController@update');
            $api->delete('/{uuid}', 'Users\UsersController@destroy');
        });

        $api->group(['prefix' => 'roles'], function ($api) {
            $api->get('/', 'Users\RolesController@index');
            $api->post('/', 'Users\RolesController@store');
            $api->get('/{uuid}', 'Users\RolesController@show');
            $api->put('/{uuid}', 'Users\RolesController@update');
            $api->patch('/{uuid}', 'Users\RolesController@update');
            $api->delete('/{uuid}', 'Users\RolesController@destroy');
        });

        $api->get('/permissions', 'Users\PermissionsController@index');
       
    });

    $api->group(['middleware' => ['guest'], 'namespace' => 'App\Http\Controllers'], function($api) {
        $api->get('/forgot-password/confirmation', 'Users\ForgotPasswordController@sendResetLinkEmail');
        $api->get('/forgot-password/reset', 'Users\ForgotPasswordController@index');
    });

    $api->group(['prefix' => 'register', 'namespace' => 'App\Http\Controllers'], function ($api) {
        $api->post('/', 'Users\UsersController@store');
    });
});


