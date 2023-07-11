<?php

namespace App\Models;

use CodeIgniter\Model;

class presensiModel extends Model
{
    protected $table      = 'sertifikat';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['name', 'email', 'nowa', 'alamat', 'bukti'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}