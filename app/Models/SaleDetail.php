<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
