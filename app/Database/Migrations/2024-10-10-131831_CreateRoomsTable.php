<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'room_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'room_description' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'room_image' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('rooms');

    }

    public function down()
    {
        //
    }
}
