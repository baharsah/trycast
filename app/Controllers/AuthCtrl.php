<?php

namespace App\Controllers;

use App\Controllers\ConsumerController;

class AuthCtrl extends ConsumerController


{

    //Hint :  Use $this for loading sessions and responses

    private function __authcheck($payload){
        
    }
    public function login(){
        return view("components/board/blankLogin");

    }

    public function register(){
        return view("components/board/blankRegister");

        
    }
    public function registerStrategic(){

    }
    public function loginStrategic(){
        
    }
}
