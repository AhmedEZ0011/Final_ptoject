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
            $table->integer('project_id')->length(15);
            $table->integer('superviser_id')->length(15);
            $table->enum('decission',['REFUSED','ACCEPTED'])->nullable();
            $table->datetime('traial_date')->nullable();
            $table->dateTime('app_date');
            $table->dateTime('decission_date')->nullable();
            $table->string('comments')->nullable();
            $table->string('decission_maker',40)->nullable();
            $table->dateTime('expected_date')->nullable();
            $table->timestamps();
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