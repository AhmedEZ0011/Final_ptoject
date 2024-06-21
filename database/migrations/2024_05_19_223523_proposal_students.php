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
        Schema::create('proposal_students', function (Blueprint $table) {
            $table->integer('id')->length(11);
            $table->integer('proposal_id')->length(11);
            $table->dateTime('enrollment_date');
            $table->dateTime('withrowal_date');
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
        Schema::dropIfExists('proposal_students');
    }
};