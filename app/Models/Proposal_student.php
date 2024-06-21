<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal_student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'proposal_id',
        'enrollment_date',
        'withrowal_date',
        
        
    ];
}
