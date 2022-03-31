<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserModifyEditing extends Migration
{
    public function up()
    {
        $f = [
            "created_at" => ["type" => "TIMESTAMP" , 'first' => true],
            "deleted_at" => ["type" => "TIMESTAMP" , 'first' => true],
            "updated_at" => ["type" => "TIMESTAMP" , 'first' => true],
        ];
        $this->forge->addColumn('users' , $f);
    }

    public function down()
    {
        $this->forge->dropColumn('users' , ['created_at' , 'deleted_at' , 'update_at']);
    }
}
