<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function ad() : BelongsTo {
        return $this->belongsTo(Advertisement::class, "ad_id");
    }

    public function member() : BelongsTo {
        return $this->belongsTo(User::class, "target_id");
    }

    public function markAsSeen() {
        $this->seen = true;
        $this->save();
    }

}