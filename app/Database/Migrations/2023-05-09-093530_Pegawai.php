<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pegawai'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nm_pegawai'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'id_jabatan'          => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jns_kelamin'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '1',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '25',
            ],
            'alamat' => [
                'type'           => 'TEXT',
                'constraint'     => '255',
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'no_ktp' => [
                'type'           => 'VARCHAR',
                'constraint'     => '16',
            ],
            'no_ijazah' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'tgl_lahir' => [
                'type'           => 'DATE'
            ],
            'tmp_lahir' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_pegawai');
        $this->forge->createTable('pegawai');
    }
 
    //--------------------------------------------------------------------
 
    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}