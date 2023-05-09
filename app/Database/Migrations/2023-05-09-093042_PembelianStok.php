<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PembelianStok extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembelian_stok'          => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_nota'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'id_supplier'       => [
                'type'              => 'INT',
                'constraint'        => 10,
            ],
            'tgl_pembelian' => [
                'type'           => 'DATE',
            ],
            'id_pegawai' => [
                'type'           => 'VARCHAR',
                'constraint'     => 3,
            ],
            
        ]);
        $this->forge->addPrimaryKey('id_pembelian_stok');
        $this->forge->createTable('pembelian_stok');
    
    }

    public function down()
    {
        $this->forge->dropTable('pembelian_stok');
    }
}