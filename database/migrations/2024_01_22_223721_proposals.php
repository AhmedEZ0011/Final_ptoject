<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('title',100);
            $table->string('sub_title',100)->nullable(true);
            $table->integer('last_proposal_id')->nullable(true)->length(11);
            $table->bigInteger('user_id');
            $table->dateTime('app_datetime')->useCurrent();
            $table->integer('superviser_id')->nullable(true)->length(11);
            $table->enum('decision',['PENDING','REFUSED','ACCEPTED'])->default("PENDING");
            $table->dateTime('decision_date')->nullable(true);
            $table->tinyInteger('enabled')->default(0)->length(1);
            //$table->boolean('proposal_flag')->default();
            (true);
            $table->string('path');
            $table->timestamps(); //إذا كنت ترغب في إضافة created_at,update_at
            
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
        });
    
        DB::unprepared("CREATE TRIGGER proposals_BEFORE_INSERT BEFORE INSERT ON `proposals` FOR EACH ROW BEGIN
        Declare lastID Integer;
          Set lastID = (SELECT id FROM gpmsnew.proposals where user_id = NEW.user_id order by created_at desc limit 1);
        SET NEW.last_proposal_id  = lastID;
        END");
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER proposals_BEFORE_INSERT;');
        Schema::dropIfExists('proposals');
    }
};