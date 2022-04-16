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
                $data['validation'] = $this->session->getFlashdata('validation');
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


                $this->validation->withRequest($this->request)->run(NULL , 'signup');
                try{
                if($this->validation->getErrors() !== []){
                    $this->session->setFlashdata('validation' ,  $this->validation->listErrors('my_list'));
                    log_message('error' , print_r( $this->validation->getErrors()));
                    
                     }elseif($this->validation->getErrors() == []){
                        $dataI = [
                            'username' => $this->request->getPost("username"),
                            'email'    => $this->request->getPost("email"),
                            "password" => $this->request->getPost("password"),
                            'name' => $this->request->getPost("fullname"),
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
        $this->validation->withRequest($this->request)->run(NULL , 'login');

        // Validation always return An Array even if no error defined ; 
        if($this->validation->getErrors() == []){

        // Password Validations ; 
        $pass = $this->userModel->where('username' ,  $this->request->getPost('username'))
        ->first();
        $passcheck = password_verify($this->request->getPost('password') , $pass['password']);
        // Define sessions
        // Username and Status (Bool)
        if($passcheck){
            $this->session->set("username" , $this->request->getPost('username'));
            $this->session->set('status' , true);
            return redirect()->to(base_url('/dash'));
        }else{
            return redirect()->to(base_url('/auth/login'));
            $this->session->setFlashdata('validation' , view("_errors_list" , ["errors" => [lang("Auth.errorPasswordIncorrect")] ]));
            }

        }else{
            $this->session->setFlashdata('validation' , $this->validation->listErrors('my_list'));
            return redirect()->to(base_url('auth/login'));
        }


    }
}
