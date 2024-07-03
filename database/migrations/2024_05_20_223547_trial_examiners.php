<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trial_examiners', function (Blueprint $table) {
            $table->bigInteger('examiner_id');
            $table->bigInteger('project_id');
            //$table->bigInteger('defenseapp_id');
            //$table->datetime('asseigment_date');
            $table->enum('opinion',['PENDING','REFUSED','ACCEPTED'])->default("PENDING");
            $table->string('comments')->nullable(true);
            $table->timestamps(); //إذا كنت ترغب في إضافة created_at,update_at
                    
                            //<<<<foreigns>>>>>>>
             $table->foreign("examiner_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
             $table->foreign("project_id")->references("id")->on("projects")->cascadeOnDelete()->cascadeOnUpdate();
        });
       }  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trial_examiners');
    }
};