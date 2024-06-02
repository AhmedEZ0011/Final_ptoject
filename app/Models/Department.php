<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function faculties()
    {
        return $this->belongsToMany(Faculty::class, 'admins')
                    ->withPivot('role')
                    ->withTimestamps();
    }
}
