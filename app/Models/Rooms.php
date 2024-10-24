<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class Rooms extends Model{
        protected $table = 'rooms';
        protected $primaryKey = 'id';

        protected $useAutoIncrement = true;
        protected $allowedFields = ['room_name', 'room_description', 'room_image'];

    }
