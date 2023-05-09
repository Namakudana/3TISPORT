<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang'             => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'merek_barang'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '25',
            ],
            'id_jenis_barang'       => [
                'type'              => 'INT',
                'constraint'        => 3,
            ],
            'stok'                  => [
                'type'              => 'INT',
                'constraint'        => 5,
            ],
            'harga_jual'            => [
                'type'              => 'INT',
                'constraint'        => 9,
            ],
            'harga_beli'            => [
                'type'              => 'INT',
                'constraint'        => 9,
            ],
            'keterangan'            => [
                'type'              => 'INT',
                'constraint'        => 'TEXT',
            ],
            'id_supplier'           => [
                'type'              => 'INT',
                'constraint'        => 10,
            ]
        ]);
        $this->forge->addPrimaryKey('id_barang');
        $this->forge->createTable('barang');
    }

    public function down()
    {
      $this->forge->dropTable('barang');
    }
}
