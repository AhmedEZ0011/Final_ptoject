<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        // DB::unprepared("CREATE TRIGGER proposals_BEFORE_INSERT BEFORE INSERT ON `proposals` FOR EACH ROW BEGIN
        // Declare lastID Integer;
        //   Set lastID = (SELECT id FROM ".env('DB_DATABASE').".proposals INNER JOIN ".env('DB_DATABASE').".proposal_students ps ON ps.proposal_id = id WHERE title = NEW.title order by created_at desc limit 1);
        // SET NEW.last_proposal_id  = lastID;
        // END");
        $db = env('DB_DATABASE');
        DB::unprepared("CREATE TRIGGER `advertisements_AFTER_INSERT` AFTER INSERT ON `advertisements` FOR EACH ROW BEGIN
	declare departement bigint;
    select department_id into departement from users where  id = NEW.`owner`;
    IF NEW.targets = 'ALL' THEN 
		INSERT INTO `$db`.`advertisements_members` (ad_id, target_id, seen, created_at)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen, current_timestamp() FROM  `$db`.`users` u WHERE u.department_id = departement;
	ELSEIF NEW.targets = 'OFFICERS' THEN 
    INSERT INTO `$db`.`advertisements_members` (ad_id, target_id, seen, created_at)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen, current_timestamp() FROM  `$db`.`users` u
            WHERE u.`type` = 1 AND u.department_id = departement;
    ElSEIF NEW.targets = 'FACULTIES' THEN
    INSERT INTO `$db`.`advertisements_members` (ad_id, target_id, seen, created_at)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen, current_timestamp() FROM  `$db`.`users` u
            WHERE u.`type` = 3 AND u.department_id = departement;
    ELSEIF NEW.targets = 'STUDENTS' THEN
    INSERT INTO `$db`.`advertisements_members` (ad_id, target_id, seen, created_at)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen, current_timestamp() FROM  `$db`.`users` u
            WHERE u.`type` = 4 AND u.department_id = departement;
    END IF;
    END"); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::unprepared('DROP TRIGGER advertisements_AFTER_INSERT;');
    }
};
