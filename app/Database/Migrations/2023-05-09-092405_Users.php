<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_pegawai'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '3',
            ],
            'username'       => [
                'type'              => 'VARCHAR',
                'constraint'        => "25",
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'last_login' => [
                'type'           => 'DATE'
            ]
        ]);
        $this->forge->addPrimaryKey('id_user');
        $this->forge->createTable('users');
    }

    public function down()
    {
        //ds
    }
}
