<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal_review extends Model
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
