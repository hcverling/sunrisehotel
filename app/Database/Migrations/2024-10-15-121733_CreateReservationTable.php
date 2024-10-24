<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservationTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'check_in_date' => [
                'type' => 'DATE'
            ],
            'check_out_date' => [
                'type' => 'DATE'
            ],
            'total_guest' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'room_type' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('reservations');
    }

    public function down()
    {
        $this->forge->dropTable('reservations');
    }
}
