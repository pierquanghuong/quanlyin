<?php

namespace App\Modules\Product\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table            = 'in_product';
    protected $useTimestamps    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [];
}