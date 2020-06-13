<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function saleDetails()
    {
        return $this->hasMany(SaleDetail::class);
    }
}
