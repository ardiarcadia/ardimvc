<?php

// Cors Setting
return function ($app) {
    
    $app->setBasePath('/');

    $app->cors([
        "origin" => "*",
        "methods" => "GET,PUT,POST,DELETE",
        "allowedHeaders" => "*",
        "exposedHeaders" => "",
        "credentials" => false,
        "maxAge" => null,
        "preflightContinue" => false,
        "optionsSuccessStatus" => 200,
    ]);

    $app->config([
        'down' => false,
        'debug' => true,
        'mode' => 'development'
    ]);

    $app->config([
        'db.host' => '127.0.0.1',
        'db.username' => 'ardi',
        'db.password' => 'ITimipsuperadmin88',
        'db.dbname' => 'qrcode',
    ]);
};
