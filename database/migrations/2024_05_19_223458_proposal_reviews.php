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
        Schema::create('proposal_reviews', function (Blueprint $table) {
        $table->id('id')->autoIncrement();
        $table->integer('proposal_id');
        $table->integer('faculty_id');
        $table->dateTime('assignment_date');
        $table->enum('opinion',['GOOD','FAIR','BAD']);
        $table->dateTime('opinion_date');
        $table->string('comments')->nullable();
        $table->timestamps();
         //إذا كنت ترغب في إضافة created_at,update_at
        
        
                         //<<<<foreigns>>>>>>>
         //$table->foreign("proposal_id")->references("id")->on("proposals");
        });
   
    
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposal_reviews');
    }
};