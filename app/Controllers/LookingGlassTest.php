<?php

namespace App\Controllers;

use App\Controllers\PublicContoller;

class LookingGlassTest extends BaseController
{
    public function index()
    {
        $title = "Lantern Public Looking Glass Test";

        $navbar["search"] = view("components/dashboard/UI/navbar/search");
        $navbar["link"] = view("components/dashboard/UI/navbar/link");
        $navbar["notif"] = view("components/dashboard/UI/navbar/notif" , ['cache' => 60]);
        $navbar["chat"] = view("components/dashboard/UI/navbar/chat", ['cache' => 60]);

        $sidebar["brand"] = view("components/dashboard/UI/sidebar/brand");
        $sidebar["profile"] = view("components/dashboard/UI/sidebar/profile");
        $sidebar["sbmenu"] = view("components/dashboard/UI/sidebar/sbmenu");
        $sidebar["searchutil"] = view("components/dashboard/UI/sidebar/searchUtility");

        $data["bread"] = view("components/dashboard/UI/breadcrumb")  ; 
        $data["navbar"] = view("components/dashboard/UI/navbar" , $navbar)  ; 
        $data["sidebar"] = view("components/dashboard/UI/sidebar" , $sidebar)  ; 
        $data["ctrlsidebar"] = view("components/dashboard/UI/ctrlsidebar");
        $data["col"] = array(
            view("components/dashboard/UI/content/col", array("size" => "col-lg-9" , "colcontents" => 
            array(
                view("components/dashboard/card/genCard"),
                view("components/dashboard/card/genCard")

                )
            ))
        );
        $data["title"] = $title ;
        return view("components/board/blankBoard" ,$data);
    }
}
