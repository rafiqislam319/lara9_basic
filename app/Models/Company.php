<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;
use App\Models\Employee;

class Company extends Model
{
    use HasFactory;
    public function employee(){
        return $this->hasManyThrough(Employee::class, Branch::class);
    }
    public function branches(){
        return $this->hasMany(Branch::class);
    }
}
