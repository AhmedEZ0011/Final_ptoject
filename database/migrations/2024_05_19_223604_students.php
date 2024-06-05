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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id')->length(11);
            $table->string('s_id',10);
            $table->string('name',40);
            $table->char('department_id',2);
            $table->string('email',50)->unique();
            $table->enum('gender',['MALE','FEMALE']);
            $table->datetime('reg_date');
            $table->char('password',64);
            $table->tinyInteger('cridits',3)->length(11);
            $table->float('gpa');
            $table->integer('approver_id')->length(11);
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
        Schema::dropIfExists('students');
    }
};