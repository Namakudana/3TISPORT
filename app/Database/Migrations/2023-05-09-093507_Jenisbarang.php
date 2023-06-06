<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jenisbarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis_barang'          => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nm_jenis_barang'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '25',
            ],
            
        ]);
        $this->forge->addPrimaryKey('id_jenis_barang');
        $this->forge->createTable('jenis_barang'); 
    }

    
    public function down()
    {
        
    }
}
