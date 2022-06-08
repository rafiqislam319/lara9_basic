<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Employee;

class Branch extends Model
{
    use HasFactory;
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function employeelist(){
        return $this->hasMany(Employee::class);
    }
}
