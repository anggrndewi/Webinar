<?php

namespace App\Models;

use CodeIgniter\Model;

class pendaftaranmodel extends Model
{
    protected $table      = 'pendaftaran';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_webinar', 'nama', 'email', 'nowa', 'alamat'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}