<?php

namespace App\Controllers;

use App\Controllers\ConsumerController;

class Dashboard extends ConsumerController {


    public function index(){
        if($this->session->status === null){
         return redirect()->to(base_url());
        }

        $navbar["search"] = view("components/dashboard/UI/navbar/search");
        $navbar["link"] = view("components/dashboard/UI/navbar/link");
        $navbar["notif"] = view("components/dashboard/UI/navbar/notif");
        $navbar["chat"] = view("components/dashboard/UI/navbar/chat");

        $sidebar["brand"] = view("components/dashboard/UI/sidebar/brand");
        $sidebar["profile"] = view("components/dashboard/UI/sidebar/profile");
        $sidebar["sbmenu"] = view("components/dashboard/UI/sidebar/sbmenu" , ["session" => \Config\Services::session()->status]);
        $sidebar["searchutil"] = view("components/dashboard/UI/sidebar/searchUtility");

        $bread['breads'] = array(
            array(
                "link" => base_url(),
                'name' => "Rumah"
            ),
            array(
                "link" => base_url("/dash"),
                'name' => "Dashboard"
            ),
            array(
                'name' => "Looking Glass"
            )

            );

        $data["bread"] = view("components/dashboard/UI/breadcrumb" , $bread)  ; 
        $data["navbar"] = view("components/dashboard/UI/navbar" , $navbar)  ; 
        $data["sidebar"] = view("components/dashboard/UI/sidebar" , $sidebar)  ; 
        $data["ctrlsidebar"] = view("components/dashboard/UI/ctrlSidebar");
        $data["col"] = array(
            view("components/dashboard/UI/content/col", array("size" => "col-lg-9" , "colcontents" => 
            array(
                view("components/dashboard/UI/alerts/redAlert")

                )
            ))
        );
        return view("components/board/blankBoard" ,$data);

    }

    public function profile($user){
        if($this->session->status === null){
            return redirect()->to(base_url());
           }
   
           $navbar["search"] = view("components/dashboard/UI/navbar/search");
           $navbar["link"] = view("components/dashboard/UI/navbar/link");
           $navbar["notif"] = view("components/dashboard/UI/navbar/notif");
           $navbar["chat"] = view("components/dashboard/UI/navbar/chat");
   
           $sidebar["brand"] = view("components/dashboard/UI/sidebar/brand");
           $sidebar["profile"] = view("components/dashboard/UI/sidebar/profile");
           $sidebar["sbmenu"] = view("components/dashboard/UI/sidebar/sbmenu" , ["session" => \Config\Services::session()->status]);
           $sidebar["searchutil"] = view("components/dashboard/UI/sidebar/searchUtility");
   
           $bread['breads'] = array(
               array(
                   "link" => base_url(),
                   'name' => "Rumah"
               ),
               array(
                   "link" => base_url("/dash"),
                   'name' => "Dashboard"
               ),
               array(
                   'name' => "Looking Glass"
               )
   
               );
   
           $data["bread"] = view("components/dashboard/UI/breadcrumb" , $bread)  ; 
           $data["navbar"] = view("components/dashboard/UI/navbar" , $navbar)  ; 
           $data["sidebar"] = view("components/dashboard/UI/sidebar" , $sidebar)  ; 
           $data["ctrlsidebar"] = view("components/dashboard/UI/ctrlSidebar");
           $data["col"] = array(
               view("components/dashboard/UI/content/col", array("size" => "col-md-3" , "colcontents" => 
               array(
                   view("components/dashboard/UI/content/profileCard" , ['datap' => $this->userModel->where('username', $user)->first() , 'uname' => $user ])
   
                   )
               )),
               view("components/dashboard/UI/content/col", array("size" => "col-md-9" , "colcontents" => 
               array(
                   view("components/dashboard/UI/content/profileTab" )
   
                   )
               ))
           );
           return view("components/board/blankBoard" ,$data);
    }

}