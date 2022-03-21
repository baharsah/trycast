<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
    protected $attributes = [
        "id"       => NULL,
        "name"     => NULL,
        "username" => NULL,
        'name'     => NULL,
        'password' => NULL
    ];
}
