<?php

namespace App\Controllers;

use App\Controllers\ConsumerController;

class AuthCtrl extends ConsumerController


{

    //Hint :  Use $this for loading sessions and responses

    public function login(){
        try{ 
            return view("components/board/blankLogin");
            
           }catch (\Error $e){
        
           }

    }

    public function register(){
       try{ 
        return view("components/board/blankRegister");
        
       }catch (\Error $e){
    
       }
        
    }
    public function registerStrategic(){

        //Register

        if($this->request->getPost() !== NULL){
            // Registering post variables
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");
            $rpassword = $this->request->getPost("rpassword");


            try {
                
        
            }catch(\Error $e){

                log_message('notice' , 'Terjadi masalah pada sisi klien. data {error}' , ["error" => $e]);

            }
        }

    }
    public function loginStrategic(){

    }
}
