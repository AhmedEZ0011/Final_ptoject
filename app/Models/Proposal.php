<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Proposal extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [

        'title',
        'sub_title',
        'last_proposal_id',
        'app_datetime',
        'superviser_id',
        'decision',
        'decision_date',
        'enabled'
    ];

    public static function getProposalsList($proposal_decision = 'PENDING', $extra = "")
    {
        $script =  'SELECT
                        p.id, p.title,
                        MAX(CASE WHEN ps.row_number = 1 THEN s.name END) AS Student1_Name,
                        MAX(CASE WHEN ps.row_number = 2 THEN s.name END) AS Student2_Name,
                        MAX(CASE WHEN ps.row_number = 3 THEN s.name END) AS Student3_Name,
                        MAX(CASE WHEN ps.row_number = 1 THEN s.id END) AS Student1_ID,
                        MAX(CASE WHEN ps.row_number = 2 THEN s.id END) AS Student2_ID,
                        MAX(CASE WHEN ps.row_number = 3 THEN s.id END) AS Student3_ID,
                        MAX(CASE WHEN ps.row_number = 1 THEN ps.`path` END) AS Student1_Path,
                        MAX(CASE WHEN ps.row_number = 2 THEN ps.`path` END) AS Student2_Path,
                        MAX(CASE WHEN ps.row_number = 2 THEN ps.`path` END) AS Student2_Path,
                        p.superviser_id AS Supervier_ID,
                        (Select `name` from users where id = p.superviser_id) as Supervier_Name
                        ,p.decision AS decision, p.app_datetime AS created_at
                    FROM proposals p
                    INNER JOIN (
                    	SELECT `path`,proposal_id, user_id, ROW_NUMBER() OVER (PARTITION BY proposal_id ORDER BY user_id) AS "row_number"
                    	FROM proposal_students
                    ) ps ON p.id = ps.proposal_id INNER JOIN users s ON ps.user_id = s.id
                    WHERE p.decision = \''.$proposal_decision.'\' '.$extra.' GROUP BY p.id, p.title, p.superviser_id;';

        return DB::select($script);
                    }
    public static function getFacultyproposals($id)
    {
        $script =  'SELECT
                        p.id, p.title,
                        MAX(CASE WHEN ps.row_number = 1 THEN s.name END) AS Student1_Name,
                        MAX(CASE WHEN ps.row_number = 2 THEN s.name END) AS Student2_Name,
                        MAX(CASE WHEN ps.row_number = 3 THEN s.name END) AS Student3_Name,
                        MAX(CASE WHEN ps.row_number = 1 THEN s.id END) AS Student1_ID,
                        MAX(CASE WHEN ps.row_number = 2 THEN s.id END) AS Student2_ID,
                        MAX(CASE WHEN ps.row_number = 3 THEN s.id END) AS Student3_ID,
                        MAX(CASE WHEN ps.row_number = 1 THEN ps.`path` END) AS Student1_Path,
                        MAX(CASE WHEN ps.row_number = 2 THEN ps.`path` END) AS Student2_Path,
                        MAX(CASE WHEN ps.row_number = 2 THEN ps.`path` END) AS Student2_Path,
                        p.superviser_id AS Supervier_ID,
                        (Select `name` from users where id = p.superviser_id) as Supervier_Name
                        ,p.app_datetime AS created_at ,p.decision AS decision
                    FROM proposals p
                    INNER JOIN (
                    	SELECT `path`,proposal_id, user_id, ROW_NUMBER() OVER (PARTITION BY proposal_id ORDER BY user_id) AS "row_number"
                    	FROM proposal_students
                    ) ps ON p.id = ps.proposal_id INNER JOIN users s ON ps.user_id = s.id
                    WHERE  p.superviser_id =' .$id.' GROUP BY p.id, p.title, p.superviser_id;';

        return DB::select($script);
    }

    public function isAccepted() : bool {
        return $this->desition == "ACCEPTED";
    }
    public function students() : HasMany {
        return $this->hasMany(Proposal_student::class);
    }

    public function project() : HasOne {
        return $this->hasOne(Project::class);
    }




}
