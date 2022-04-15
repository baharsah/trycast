<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
        'my_list' => "_errors_list"
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $signup =  [

        'username' => [
            "rules" => 'required|alpha_dash|min_length[4]|not_in_list[root,admin,super]|is_unique[users.username]',
            "label" => 'Auth.username',
            "errors" => [
                "required" => 'Auth.errorRequiredUsername',
                "min_length" => 'Auth.errorUsernameMinLength',
                "alpha_dash" => "Auth.errorUsernameCase",
                'not_in_list' => "Auth.errorUsernameNotInList",
                'is_unique' =>'Auth.errorUsernameUnique'
            ]
            ],
            'fullname' => [
                "rules" => 'required|min_length[4]|alpha_space',
                "label" => 'Auth.fullname',
                "errors" => [
                        'alpha_space' => "Auth.errorFullnameAS",
                        'required' => "Auth.errorRequiredFullname",
                        'min_length' => 'Auth.errorFullnameMin'
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
        "rules" =>'required|valid_email|is_unique[users.email]',
        "errors" => [
            "valid_email" => 'Auth.errorValidEmail',
            "required" => 'Auth.errorRequiredEmail',
            'is_unique' => "Auth.errorEmailUnique"
        ]
        ]
    
        

    ];
    public $login = [

        'username' => [
            "rules" => 'required|alpha_dash|min_length[4]|not_in_list[root,admin,super]|is_not_unique[users.username]',
            "label" => 'Auth.username',
            "errors" => [
                "required" => 'Auth.errorRequiredUsername',
                "min_length" => 'Auth.errorUsernameMinLength',
                "alpha_dash" => "Auth.errorUsernameCase",
                'is_not_unique' => "Auth.errorUsernameUnavailable",
                'not_in_list' => "Auth.errorUsernameNotInList",
            ]
            ],
        'password' => [
            'rules' => 'required|min_length[8]|alpha_numeric_punct',
            'label' => "Auth.password",
            "errors" => [
                "required" => "Auth.errorRequiredPassword",
                "min_length" => "Auth.errorPasswordMinLength",
                "alpha_numeric_punct" => "Auth.errorAlphanumericPunc",
            ]
        ],

    ];
}
