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
        Schema::create('reports', function (Blueprint $table) {
            $table->integer('id')->length(15);
            $table->dateTime('app_date');
            $table->integer('student_id')->length(15);
            $table->integer('project_id')->length(15);
            $table->integer('superviser_id')->length(15);
            $table->string('comments');
            $table->string('content');
            $table->enum('acceptance_status',['ACCEPTED','PENDING','REJECTED']);
            $table->binary('upload_flag');
    });
  
}

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};