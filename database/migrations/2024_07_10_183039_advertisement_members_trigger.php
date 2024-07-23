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
        $db = env('DB_DATABASE');
        DB::unprepared("CREATE TRIGGER `advertisements_AFTER_INSERT` AFTER INSERT ON `advertisements` FOR EACH ROW BEGIN
	IF NEW.targets = 'ALL' THEN 
		INSERT INTO `$db`.`advertisements_members` (ad_id, target_id, seen)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen FROM  `$db`.`users` u;
	ELSEIF NEW.targets = 'OFFICERS' THEN 
    INSERT INTO `$db`.`advertisements_members` (ad_id, target_id, seen)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen FROM  `$db`.`users` u
            WHERE u.`type` = 1;
    ElSEIF NEW.targets = 'FACULTIES' THEN
    INSERT INTO `$db`.`advertisements_members` (ad_id, target_id, seen)
			SELECT NEW.id AS ad_id, u.id as target_id, 0 as seen FROM  `$db`.`users` u
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
