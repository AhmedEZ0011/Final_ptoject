<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->integer('id')->length(11);
            $table->string('role');
            $table->string('name',40);
            $table->char('department_id',2);
            $table->string('email',50)->unique();
            $table->enum('gender',['MALE','FEMALE']);
            $table->datetime('reg_date');
            $table->char('password',64);
            $table->string('file_path')->nullable();
            $table->tinyInteger('cridits',3)->length(11)->nullable();
            $table->float('gpa')->nullable();
            $table->timestamps(); //إذا كنت ترغب في إضافة created_at,update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
