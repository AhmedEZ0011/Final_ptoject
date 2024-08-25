<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Advertisement extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'owner',
        'targets',
        'enabled'
    ];

    public static function getAdvertisementsFor($id) {
        return DB::select('SELECT mem.ad_id, ifnull() FROM advertisements_members mem 
                            INNER JOIN advertisements ad ON ad.id = mem.ad_id
                            INNER JOIN users s ON s.id = ad.owner
                            WHERE ad.targets = \'ALL\' OR (ad.targets = \'SPECIFIC\' AND mem.target_id = '.$id.');');
    }

    public function owner() : BelongsTo {
        return $this->belongsTo(User::class, "owner");
    }

    public function targets() : HasMany {
        return $this->hasMany(AdvertisementMember::class, "ad_id");
    }
}