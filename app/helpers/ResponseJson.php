<?php

namespace App\Helpers;

class ResponseJson extends Helper{

    function respSuccess(array $data)
    {
        $this->app->response()->json([
            "status" => 'success',
            "data" => $data
        ], 200);
    }

    function respFail(string $message)
    {
        $this->app->response()->json([
            "status" => 'failed',
            "message" => $message
        ], 400);
    }

    function respAuthFail(string $message=null)
    {
        $message = (empty($message)) ? 'Unauthorized' : $message;
        $this->app->response()->json([
            "status" => 'failed',
            "message" => $message
        ], 401);
    }

}