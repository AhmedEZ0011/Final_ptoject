<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'role',
        'name',
        'department_id',
        'email',
        'gender',
        'reg_date',
        'password',
        'file_path',
        'cridits',
        'gpa',
    ];
}
