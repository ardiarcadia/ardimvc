<?php

return function ($app) {

    $app->get('/', function () use($app) { 
        $app->response()->json([
            "status" => 'success',
            "message" => 'ardiMVC is working well !'
        ], 200);
    });

    $app->group('/auth', function () use($app) {
        $app->post("/index_test", "\App\Controllers\AuthController@index");
        $app->get("/get_param/{id}", "\App\Controllers\AuthController@get_data");
        $app->get("/show_form", "\App\Controllers\AuthController@get_form");
    });

    $app->post("/single", "\App\Controllers\AuthController@index");

};
