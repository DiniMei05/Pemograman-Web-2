<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateskincareTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_skincare' =>[
                'type' => 'INT',
                'constrain' => 10,
                'auto_increment' => true,
            ],
            'nama_sacaelett' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kategori_sacaelett' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'katalog' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addKey('id_skincare', true);
        $this->forge->createTable('produk', true);
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}