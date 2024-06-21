<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defense extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'defenseapp_id',
        'date',
        'document_flag',
        'decission',
        'decission_maker',
        'academic_year',
        'academic_term',
    ];
}
