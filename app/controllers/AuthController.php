<?php

namespace App\Controllers;

class AuthController extends Controller{

    public function index()
    {
        $this->app->response()->json([
            "message" => 'Hallo controllers Auth',
            "env" => _env("APP_NAME", "Application Name"),
            "data" => $this->app->request()->get("username")
        ], 200);
    }

    function get_data($id)
    {
        $this->app->response()->json([
            "message" => 'success',
            "id" => $id
        ], 200);
    }
}