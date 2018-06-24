<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('test/basic_routing', function () {
    return "this is use the basic routing";
});

$router->get('test/basic_routing/{parameter}', function ($parameter) {
    return sprintf("this is use the basic routing with parameter: `%s`", $parameter);
});

$router->get('test/basic_routing/{parameter}', function ($parameter) {
    return sprintf("this is use the basic routing with parameter: `%s`", $parameter);
});

// can use on check user is login or not 
$router->group(['middleware' => App\Http\Middleware\TestMiddleware::class], function () use ($router) {
    $router->get('test/group_and_middleware', function ()    {
        return "group share route attributes, such as middleware";
    });
});

$router->get('test/use_contoller',  'TestController@index');
$router->get('test/use_contoller/hello/{name}',  'TestController@hello');
