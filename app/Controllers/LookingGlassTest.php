<?php

namespace App\Controllers;

use App\Controllers\PublicContoller;

class LookingGlassTest extends PublicController
{
    public function index()
    {
        $title = "Lantern | Looking Glass Test";

        $card1 = array(
            "cardtitle" => "Looking Glass form",
            "cardcontent" => "&nbsp;",
            "cardlink" => array(
                array("link" =>"#clear" , "title" => "Clear"),
                array("link" =>"#start" , "title" => "Start")

            )
            );

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
        $data["ctrlsidebar"] = view("components/dashboard/UI/ctrlSidebar");
        $data["col"] = array(
            view("components/dashboard/UI/content/col", array("size" => "col-lg-9" , "colcontents" => 
            array(
                view("components/dashboard/card/genCard" , $card1)

                )
            ))
        );
        $data["title"] = $title ;
        return view("components/board/blankBoard" ,$data);
    }
}
