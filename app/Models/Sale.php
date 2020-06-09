<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function saleDeitals()
    {
        return $this->hasMany(SaleDetail::class);
    }
}
