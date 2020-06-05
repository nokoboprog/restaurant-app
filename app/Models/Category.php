<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function menu()
    {
        return $this->hasmany(Menu::class);
    }
}
