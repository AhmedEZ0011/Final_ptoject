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
            $table->bigInteger('id', true);
            $table->bigInteger('proposal_id');
            //$table->integer('superviser_id');
            $table->enum('status',['INPROGRESS','IDLE', 'FINISHING','DONE'])->default("INPROGRESS");
            $table->dateTime('end_date')->nullable(true);
            $table->string('path');
            $table->double('grade')->default(0);
            $table->timestamps(); 
            
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