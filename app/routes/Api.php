<?php

return function ($app) {

    $app->post("/posting", "\App\Controllers\AuthController@index");
    $app->get("/posting/{id}", "\App\Controllers\AuthController@get_data");

};

