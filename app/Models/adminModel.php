<?php

namespace App\Models;

use CodeIgniter\Model;

class pendaftaranmodel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['nama', 'username', 'email'];
}