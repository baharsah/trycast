<?php 

/**
 * 
 * Role Implementation of CodeIgniter 4
 * Copyright Lutfikahana Baharsah 2022
 * 
 */

namespace Role;

class Role {

    protected $roleName ; 



    public function __construct(){

        define('ROLE_R' , 1);
        define("ROLE_W" , 2);
        define("ROLE_X" , 3);
        define("ROLE_RW", ROLE_X);
        define("ROLE_RO" , ROLE_R);

        

    }

    /**
     * calling namespace
     * @var $namespace string
     * 
     * @return Role
     */

    public function use($namespace){

        // Calling App\Roles\Role\Item\<NamedRole>
    } 

    public function getName($namespace){

    }

    public function group(array $namespaces){

    }

    public function __destruct(){

    }

}