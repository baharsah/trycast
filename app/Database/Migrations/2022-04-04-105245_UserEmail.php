<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserEmail extends Migration
{
    public function up()
    {
        $f = [
            "email" => ["type" => "TEXT" , 'first' => true],
        ];
        $this->forge->addColumn('users' , $f);
    }

    public function down()
    {
        $this->forge->dropColumn('users' , ['email']);
    }
}
