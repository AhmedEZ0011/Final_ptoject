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
        Schema::create('defense_app', function (Blueprint $table) {

            $table->integer('id')->length(15);
            $table->integer('student_id')->length(15);
            $table->integer('superviser_id')->length(15);
            $table->enum('decission',['refused','accepted']);
            $table->dateTime('app_date');
            $table->dateTime('decission_date');
            $table->string('comments');
            $table->string('decission_maker',50);
            $table->dateTime('expected_date');

        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('defense_app');
    }
};