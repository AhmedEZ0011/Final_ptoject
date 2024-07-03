<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'proposal_id',
        'status',
        'end_date',
        'path'
    ];
}
