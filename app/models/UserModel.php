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

        $users = $this->db->query('SELECT * FROM form_01')->all();

        return $users;
    }
}