<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username' => [
                "type" => "VARCHAR",
                'constraint' => '100',
            ],
            "name" => [
                "type" => "VARCHAR",
                'constraint' => '100',
            ],
            "password" => [
                "type" => "VARCHAR",
                'constraint' => '100',
            ],
            "role" => [
                "type" => "INT"
            ]
            ]);
            $this->forge->createTable('users');


    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
