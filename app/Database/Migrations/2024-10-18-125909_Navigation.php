<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Navigation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'TYPE' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'navigation_label' => [
                'TYPE' => 'VARCHAR',
                'constraint' => 255
            ],
            'status' => [
                'TYPE' => 'VARCHAR',
                'constraint' => 10
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('navigations', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('navigations');
    }
}
