<?php

namespace App\Modules\Device\Models;

use CodeIgniter\Model;

class Device extends Model
{
    protected $table            = 'st_device';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [];
}