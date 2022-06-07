<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\Owner;

class Mechanic extends Model
{
    use HasFactory;
    public function owner(){
        return $this->hasOneThrough(Owner::class, Car::class);
    }
    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
