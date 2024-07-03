<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trial_examiner extends Model
{
    use HasFactory;
    protected $fillable = [
        'examiner_id',
        'project_id',
        'opinion',
        'comments'
    ];
}
