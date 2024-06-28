<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public $timestamps = false;
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->dateTime('assignment_date')->nullable(true);
            $table->integer('user_id');
            $table->integer('project_id')->nullable(true);;
            $table->integer('superviser_id')->nullable(true);;
            $table->string('comments')->nullable(true);
            $table->string('content');
            $table->enum('acceptance_status',['ACCEPTED','PENDING','REJECTED'])->default("PENDING");
            $table->binary('upload_flag')->nullable(true);
            $table->timestamps();
          
            
           
          
            

           
                //<<<<foreigns>>>>>>>
           // $table->foreign("student_id")->references("id")->on("users");
            //$table->foreign("project_id")->references("id")->on("projects");
            
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