<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    // return $this->hasMany(User::class);
    public function getComd()
    {
        return $this->hasMany(ItemCommodit::class,'item_id');
    }

    public function imag()
    {
        return $this->hasMany(ItemImage::class,'item_id');
    }
}
