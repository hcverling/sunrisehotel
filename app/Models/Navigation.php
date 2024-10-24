<?php

namespace App\Models;

use CodeIgniter\Model;

class Navigation extends Model
{
    protected $table            = 'navigations';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['navigation_label', 'status'];

    
}
