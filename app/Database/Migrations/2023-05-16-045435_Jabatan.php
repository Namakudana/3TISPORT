<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jabatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jabatan'          => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nm_jabatan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],     
        ]);
        $this->forge->addPrimaryKey('id_jabatan');
        $this->forge->createTable('jabatan');
    
    }


    public function down()
    {
        //
    }
}
