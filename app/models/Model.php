<?php

namespace App\Models;

use Leaf\App;
use Leaf\Db;

class Model{

    protected $app;
    protected $db;

    public function __construct(){
        $this->app = new App;
        $this->db = new Db;
	}

    function connectDb()
    {
        $this->db->connect([
            'host' => $this->app->config('db.host'),
            'username' => $this->app->config('db.username'),
            'password' => $this->app->config('db.password'),
            'dbname' => $this->app->config('db.dbname')
        ]);
    }

}