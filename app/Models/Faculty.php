<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'admins')
                    ->withPivot('role')
                    ->withTimestamps();
    }
}
