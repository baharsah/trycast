<?php

namespace App\Controllers;

use App\Controllers\ConsumerController;

class AuthCtrl extends ConsumerController


{

    //Hint :  Use $this for loading sessions and responses

    public function login(){
        try{ 
            $data['data'] = true ; 
            if($this->session->getFlashdata('validation') !==null){
                $data['validation'] = print_r($this->session->getFlashdata('validation'));
            }
            return view("components/board/blankLogin" , $data);
            
           }catch (\Error $e){
        
           }

    }

    public function register(){
       try{ 
        $data['data'] = true ; 
        if($this->session->getFlashdata('validation') !==null){
            if($this->session->getFlashdata('validation') === "success"){
                $data['validation'] = view('successAlert');
            }else{
            $data['validation'] = $this->session->getFlashdata('validation');
        }
        }
        return view("components/board/blankRegister" , $data);
        
       }catch (\Error $e){
        throw new \Error($e);
       }
        
    }
    public function registerStrategic(){

        //Register

        if($this->request->getPost() !== NULL){
            // Registering post variables


                $this->validation->setRules([
                    'username' => [
                        "rules" => 'required|alpha_dash|min_length[4]|not_in_list[root,admin,super]|is_unique[users.username]',
                        "label" => 'Auth.username',
                        "errors" => [
                            "required" => 'Auth.errorRequiredUsername',
                            "min_length" => 'Auth.errorUsernameMinLength',
                            "alpha_dash" => "Auth.errorUsernameCase",
                            'not_in_list' => "Auth.errorUsernameNotInList"
                        ]
                        ],
                    'password' => [
                        'rules' => 'required|min_length[8]|alpha_numeric_punct',
                        'label' => "Auth.password",
                        "errors" => [
                            "required" => "Auth.errorRequiredPassword",
                            "min_length" => "Auth.errorPasswordMinLength",
                            "alpha_numeric_punct" => "Auth.errorAlphanumericPunc"
                        ]
                    ],
                    'rpassword' => [
                        "rules" => "required|matches[password]",
                        "label" => "rpassword",
                        'errors' => [
                            "required" => "Auth.errorRequiredRPassword",
                            'matches' => "Auth.errorMatchesPassword"
                        ]
                    ],
                    'terms' => [
                        "rules" => "required",
                        "label" => "Auth.terms",
                        "errors" => [
                            "required" => "Auth.errorTerms"
                        ]
                    ],
                    'email' =>[
                    "label" => "Auth.email" ,
                    "rules" =>'required|valid_email',
                    "errors" => [
                        "valid_email" => 'Auth.errorValidEmail',
                        "required" => 'Auth.errorRequiredEmail'
                    ]
                    ]
                ]);
                $this->validation->withRequest($this->request)->run();
                try{
                if($this->validation->getErrors() !== []){
                    $this->session->setFlashdata('validation' ,  $this->validation->listErrors('my_list'));
                    log_message('error' , print_r( $this->validation->getErrors()));
                    
                     }elseif($this->validation->getErrors() == []){
                        $dataI = [
                            'username' => $this->request->getPost("username"),
                            'email'    => $this->request->getPost("email"),
                            "password" => $this->request->getPost("password"),
                            'name' => 1,
                            'role' => 1
                        ];
                  
                     $this->userModel->insert($dataI);
                    
                        $this->session->setFlashdata('validation' , "success");
                        

                     }
                     }catch(\Exception $e){
                        log_message('error', $e);
                    }
                    return redirect()->route("auth/register");
                   


                
        

        }

    }
    public function loginStrategic(){

    }
}
