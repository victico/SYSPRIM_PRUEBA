<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

   	 public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    
}
