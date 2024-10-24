<?php

namespace App\Models;

use CodeIgniter\Model;

class Reservations extends Model
{
    protected $table            = 'reservations';
   
    protected $allowedFields    = ['name', 'phone_number', 'address', 'check_in_date', 'check_out_date', 'total_guest', 'room_type'];

    
}
