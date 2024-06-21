<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'sub_title',
        'last_proposal_id',
        'applicant_id',
        'app_datetime',
        'superviser_id',
        'decision',
        'decision_date',
        'enabled',
        'proposal_flag',
        
        
    ];
}
