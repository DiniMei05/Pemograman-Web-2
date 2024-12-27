<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooks extends Migration
{
    public function up()
    {
       $this->forge->addfield([
             'id_bulu' => [
             'type' => 'INT',
             'constrain' => 11,
             'auto_increment' => true,
            ],
             'judul' => [
             'type' => 'VARCHAR'
             'constrain' => 255,    
             ],
             'pengarang' => [
             'type' => 'VARCHAR'
             'constrain' => 255, 
            ],
             'tahun' => [
             'type' => 'INT'
             'constrain' => 5,   
            ],
             'cover' => [
             'type' => 'VARCHAR'
             'constrain' => 255, 
            ],
             'harga' => [
             'type' => 'INT'
             'constrain' => 16,           
       ]
    ]);

    $this->forget->addkey('id_buku', true);
    $this->forget->createTable('books');

    }

    public function down()
    {
       $this->forget->
    }
}
