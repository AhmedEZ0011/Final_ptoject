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
            $table->bigInteger('user_id');
            $table->bigInteger('proposal_id');
            $table->dateTime('enrollment_date')->useCurrent();
            $table->dateTime('withrowal_date')->useCurrent();
            $table->string('path');
            $table->timestamps(); //إذا كنت ترغب في إضافة created_at,update_at
                              //<<<<foreigns>>>>>>>
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("proposal_id")->references("id")->on("proposals")->cascadeOnDelete()->cascadeOnUpdate();
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