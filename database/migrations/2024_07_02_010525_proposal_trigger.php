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
        DB::unprepared("CREATE TRIGGER proposals_BEFORE_INSERT BEFORE INSERT ON `proposals` FOR EACH ROW BEGIN
        Declare lastID Integer;
          Set lastID = (SELECT id FROM ".env('DB_DATABASE').".proposals INNER JOIN ".env('DB_DATABASE').".proposal_students ps ON ps.proposal_id = id WHERE title = NEW.title order by created_at desc limit 1);
        SET NEW.last_proposal_id  = lastID;
        END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        DB::unprepared('DROP TRIGGER proposals_BEFORE_INSERT;');
    }
};
