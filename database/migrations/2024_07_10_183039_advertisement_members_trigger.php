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

        DB::unprepared("CREATE TRIGGER `advertisements_AFTER_INSERT` AFTER INSERT ON `advertisements` FOR EACH ROW BEGIN
	IF NEW.targets = 'ALL' THEN 
		INSERT INTO `laravel`.`advertisements_members` (ad_id, target_id, seen)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen FROM  `laravel`.`users` u;
	ELSEIF NEW.targets = 'OFFICERS' THEN 
    INSERT INTO `laravel`.`advertisements_members` (ad_id, target_id, seen)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen FROM  `laravel`.`users` u
            WHERE u.`type` = 1;
    ElSEIF NEW.targets = 'FACULTIES' THEN
    INSERT INTO `laravel`.`advertisements_members` (ad_id, target_id, seen)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen FROM  `laravel`.`users` u
            WHERE u.`type` = 3;
    ELSEIF NEW.targets = 'STUDENTS' THEN
    INSERT INTO `laravel`.`advertisements_members` (ad_id, target_id, seen)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen FROM  `laravel`.`users` u
            WHERE u.`type` = 4;
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
