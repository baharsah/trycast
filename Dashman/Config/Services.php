<?php


namespace Dashman\Config;

use CodeIgniter\Config\BaseService;

class Services extends BaseService{

    public static function renderView(){

    }

    public static function fetchData(){

    }

    public static function checkLocation($url , $type){

        if($url == NULL){

            throw new Error('Url Not Supplied!');
        }else{
            if($type == 'sidebar'){

                // Sidebar supplier goes here

            }elseif($type == 'breadcrumb'){

                // Breadcrumb Supplier is here
    
            }
        }

    }

}