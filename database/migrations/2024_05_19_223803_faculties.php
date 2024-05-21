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
        Schema::create('faculties', function (Blueprint $table) {
        $table->integer('id')->length(15);
        $table->string('name', 50);
        $table->string('password',60);
        $table->string('email')->unique();
        $table->enum('type',['cooperater','employee']);
        $table->string('department_id',2);
          }) ;
        }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
};