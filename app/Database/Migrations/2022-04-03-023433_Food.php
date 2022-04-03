<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Food extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'category_id'       => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'price' => [
                'type' => 'FLOAT',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => TRUE
            ],
            'updated_at' => [
                'type'        => 'DATETIME',
                'null'        => TRUE
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('foods');
    }

    public function down()
    {
        $this->forge->dropTable('foods');
    }
}
