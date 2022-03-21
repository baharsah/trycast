<?php

namespace App\Controllers;

use App\Controllers\ConsumerController;

class Auth extends ConsumerController
{
    public function index()
    {
        //
    }

    public function login(){
        return view("components/board/blankLogin");
    }

    public function register(){
        
    }
}
