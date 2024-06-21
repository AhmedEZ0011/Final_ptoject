<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->integer('id')->length(15);
            $table->integer('proposal_id')->length(15);
            $table->integer('superviser_id')->length(11);
            $table->enum('status',['INPROGRESS','IDLE','DONE']);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
           // $table->string('comments');
           //$table->string('content');
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
        Schema::dropIfExists('projects');
    }
};