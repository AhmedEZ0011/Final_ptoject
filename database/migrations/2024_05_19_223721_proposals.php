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
        Schema::create('proposals', function (Blueprint $table) {
            $table->integer('id')->length(11);
            $table->string('title',100);
            $table->string('sub_title',100);
            $table->integer('last_proposal_id')->length(11);
            $table->string('applicant_id',)->length(10);
            $table->dateTime('app_datetime');
            $table->integer('superviser_id')->length(11)->nullable();;
            $table->enum('decision',['PENDING','REFUSED','ACCEPTED'])->nullable();;
            $table->dateTime('decision_date');
            $table->tinyInteger('enabled')->length(1);
            $table->binary('proposal_flag')->nullable();
            $table->binary('proposal_path');
            $table->timestamps(); //إذا كنت ترغب في إضافة created_at,update_at
    });
    
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
};