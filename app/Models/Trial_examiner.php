<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trial_examiner extends Model
{
    use HasFactory;
    protected $fillable = [
        'examiner_id',
        'defenseapp_id',
        'asseigment_date',
        'opinion',
        'comments',
    ];
}
