<?php

namespace App\Models;

class UserModel extends Model{

    function index()
    {
        $this->db->connect([
            'host' => '127.0.0.1',
            'username' => 'ardi',
            'password' => 'ITimipsuperadmin88',
            'dbname' => 'qrcode',
        ]);
        

        // $this->db->connect([
        //     'host' => $this->app->config('db.host'),
        //     'username' => $this->app->config('db.username'),
        //     'password' => $this->app->config('db.password'),
        //     'dbname' => $this->app->config('db.dbname')
        // ]);

        $users = $this->db->query('SELECT * FROM form_01')->all();

        return $users;
    }
}