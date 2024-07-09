<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdvertisementMember extends Model
{
    use HasFactory;

    protected $table = "advertisements_members";
    protected $fillable = [
        'ad_id',
        'target_id',
        'seen'
    ];


}
