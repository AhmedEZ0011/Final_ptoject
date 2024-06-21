<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'proposal_id',
        'superviser_id',
        'status',
        'start_date',
        'end_date',
       // 'comments',
       // 'content',
    ];
}
