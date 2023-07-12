<?php

namespace App\Models;

use CodeIgniter\Model;

class webinarModel extends Model
{
    protected $table      = 'webinar';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['judul', 'waktu', 'deskwebinar', 'poster', 'sertifikat', 'namapemateri', 'deskpemateri'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}