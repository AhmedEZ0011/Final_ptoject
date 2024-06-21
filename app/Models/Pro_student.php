<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'proposal_id',
        'faculty_id',
        'assignment_date',
        'opinion',
        'opinion_date',
        'comments',
        
    ];
}
