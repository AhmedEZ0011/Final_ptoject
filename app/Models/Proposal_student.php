<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Proposal_student extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'proposal_id',
        'enrollment_date',
        'withrowal_date',
        'path'

    ];

    public function user() : HasOne {
        return $this->hasOne(User::class);
    }
    public function proposal() : BelongsTo {
        return $this->belongsTo(Proposal::class);
    }}