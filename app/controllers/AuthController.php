<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends Controller{

    function index()
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

    function get_form()
    {
        $dbM = new UserModel;
        $dbM->connectDb();
        $feedback = $dbM->index();

        $this->app->response()->json([
            "message" => 'success',
            "data" => $feedback
        ], 200);
    }
}