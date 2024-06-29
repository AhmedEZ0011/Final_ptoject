git<?php

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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->char('department_id', 2);
            $table->integer('faculty_id');
            $table->string('role');

            
                              //<<<<foreigns>>>>>>>
          // $table->foreign('department_id')->references('department_id')->on('departments')->cascadeOnDelete()->cascadeOnUpdate();

        });
 
                      
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};