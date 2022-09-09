<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function brands()
    {
        return $this->belongsTo(Brand::class,'brand_id', 'id');
    }
    public function modelos()
    {
        return $this->belongsTo(Modelo::class,'model_id', 'id');
    }
}
