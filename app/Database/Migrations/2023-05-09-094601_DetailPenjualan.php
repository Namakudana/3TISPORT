<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penjualan'          => [
                'type'           => 'INT',
                'constraint'     => 10,
            ],
            'id_barang'          => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'harga_jual'          => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            'harga_beli'          => [
                'type'           => 'INT',
                'constraint'     => 9,
            ],
            'quantity'          => [
                'type'           => 'INT',
                'constraint'     => 3,
            ],
        ]);
        $this->forge->createTable('detail_penjualan');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('detail_penjualan');
    }
}
