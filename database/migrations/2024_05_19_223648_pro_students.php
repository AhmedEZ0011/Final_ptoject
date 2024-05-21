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
        Schema::create('pro_students', function (Blueprint $table) {
            $table->integer('id')->length(11);
            $table->string('s_id',10);
            $table->string('name',40);
            $table->char('department_id',2);
            $table->string('email',50)->unique();
            $table->enum('gender',['MALE','FEMALE']);
            $table->datetime('app_date');
            $table->integer('pin')->length(11);
            $table->tinyInteger('cridits',3)->length(11);
            $table->float('gpa');
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
        Schema::dropIfExists('pro_students');
    }
};