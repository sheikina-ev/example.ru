<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //  Связь один ко многим (от PK к FK)
    public function products() {
        return $this->hasMany(Product::class);
    }

}
