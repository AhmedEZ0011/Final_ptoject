<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'proposal_id',
        'status',
        'end_date',
        'path',
        'grade'
    ];


    public static function getProjectsList($status = 'INPROGRESS')
    {
        return DB::select('SELECT
                                j.id, ps.proposal_id, j.grade, p.title, p.enabled AS enabled,
                                MAX(CASE WHEN ps.row_number = 1 THEN ps.name END) AS Student1_Name,
                                MAX(CASE WHEN ps.row_number = 2 THEN ps.name END) AS Student2_Name,
                                MAX(CASE WHEN ps.row_number = 3 THEN ps.name END) AS Student3_Name,
                                MAX(CASE WHEN ps.row_number = 1 THEN ps.user_id END) AS Student1_ID,
                                MAX(CASE WHEN ps.row_number = 2 THEN ps.user_id END) AS Student2_ID,
                                MAX(CASE WHEN ps.row_number = 3 THEN ps.user_id END) AS Student3_ID,
                                p.superviser_id AS Supervier_ID, j.status, j.created_at, j.end_date, j.`path`,
                                (Select `name` from users where id = p.superviser_id) as Supervier_Name

                            FROM projects j
                            Inner join proposals p ON p.id = j.proposal_id
                            INNER JOIN (
                            	SELECT `path`,proposal_id, user_id, s.name, ROW_NUMBER() OVER (PARTITION BY proposal_id ORDER BY user_id) AS "row_number"
                            	FROM proposal_students inner join users s ON s.id = user_id
                            ) ps ON j.proposal_id = ps.proposal_id
                            WHERE j.status = \'' . $status . '\' GROUP BY j.id, p.title, p.superviser_id;');
    }

    public static function getProjectsListWithCondition($condition = '')
    {
        return DB::select('SELECT
                                j.id, ps.proposal_id, j.grade, p.title, p.sub_title subtitle,
                                MAX(CASE WHEN ps.row_number = 1 THEN ps.name END) AS Student1_Name,
                                MAX(CASE WHEN ps.row_number = 2 THEN ps.name END) AS Student2_Name,
                                MAX(CASE WHEN ps.row_number = 3 THEN ps.name END) AS Student3_Name,
                                MAX(CASE WHEN ps.row_number = 1 THEN ps.user_id END) AS Student1_ID,
                                MAX(CASE WHEN ps.row_number = 2 THEN ps.user_id END) AS Student2_ID,
                                MAX(CASE WHEN ps.row_number = 3 THEN ps.user_id END) AS Student3_ID,
                                MAX(CASE WHEN ps.row_number = 1 THEN ps.`path` END) AS Student1_Path,
                                MAX(CASE WHEN ps.row_number = 2 THEN ps.`path` END) AS Student2_Path,
                                MAX(CASE WHEN ps.row_number = 3 THEN ps.`path` END) AS Student3_Path,
                                p.superviser_id AS Supervier_ID, j.status, j.created_at AS Created_AT ,
                                j.end_date, j.`path`, ps.department_name , ps.department_id,
                                (Select `name` from users where id = p.superviser_id ) as Supervier_Name
                            FROM projects j
                            Inner join proposals p ON p.id = j.proposal_id
                            INNER JOIN (
                            	SELECT `path`,proposal_id, dp.name department_name, dp.department_id as department_id , user_id, s.name, ROW_NUMBER() OVER (PARTITION BY proposal_id ORDER BY user_id) AS "row_number"
                            	FROM proposal_students inner join users s ON s.id = user_id
                                INNER JOIN departments dp ON s.department_id = dp.id
                            ) ps ON j.proposal_id = ps.proposal_id
                            WHERE ' . $condition . ' GROUP BY j.id, ps.department_name, ps.department_id , p.title, p.superviser_id;');
    }

    /*public function getLastModifiedFile($id)

{

    $path = public_path()."/users/{$id}/documentation/*";

    $files = glob($path); // Get all files in the folder

    usort($files, function($a, $b) {

        return filemtime($b) - filemtime($a); // Sort by modification time, newest first

    });*/

    public function getLastModifiedFile($id)
    {
        $path = public_path()."/users/{$id}/documentation/*";
        $files = glob($path); // Get all files in the folder

        if (empty($files)) {
            return null; // or handle the case where no files are found
        }

        usort($files, function($a, $b) {
            return filemtime($b) - filemtime($a); // Sort by modification time, newest first
        });

        $lastFile = basename($files[0]); // Get the last file name
        return $lastFile;
    }

   /* public static function getArchive($condition = '')
    {
        return DB::select('SELECT
                               p.*, s.*
                            FROM projects p
                            Inner join proposals s ON s.id = p.proposal_id
                            WHERE p.status = \'DONE\' ' . $condition . ';');
    }*/
}
