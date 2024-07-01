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
            $table->string('id');
            $table->integer('user_id');
            $table->bigInteger('proposal_id')->nullable(true);
            $table->integer('superviser_id')->nullable(true);
            $table->enum('status',['INPROGRESS','IDLE','DONE'])->default("INPROGRESS");
            $table->dateTime('end_date')->nullable(true);
            $table->string('path');
            $table->timestamps(); 
                       
            //$table->primary('id');
                            //<<<<foreigns>>>>>
            $table->foreign("proposal_id")->references("id")->on("proposals");      
         
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