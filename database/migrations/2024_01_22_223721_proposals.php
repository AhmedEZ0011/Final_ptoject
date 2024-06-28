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
            $table->binary('proposal_flag')->nullable(true);
            $table->string('path');
            $table->timestamps(); //إذا كنت ترغب في إضافة created_at,update_at
            
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
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