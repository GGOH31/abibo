<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCommodit extends Model
{
    use HasFactory;
    public function commod()
    {
        return $this->belongsTo(Commoditer::class,'commodit_id');
    }
}
