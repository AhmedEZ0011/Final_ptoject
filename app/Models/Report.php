<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'assignment_date',
        'user_id',
        'project_id',
        'superviser_id',
        'comments',
        'content',
        'acceptance_status',
        'upload_flag',
    ];
    
}
