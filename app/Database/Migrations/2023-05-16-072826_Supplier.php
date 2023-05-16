<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Supplier extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id_supplier'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nm_supplier'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '25',
            ],
            'alamat'       => [
                'type'              => 'TEXT',
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '25',
            ]   
        ]);
        $this->forge->addPrimaryKey('id_supplier');
        $this->forge->createTable('supplier');
    
    }

    public function down()
    {
        //
    }
}
