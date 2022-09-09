<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    public function brands()
    {
        return $this->belongsTo(Brand::class,'brand_id', 'id');
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
