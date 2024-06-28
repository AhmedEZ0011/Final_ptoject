<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    
     /* Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->string('name',40);
            $table->char('department_id', 2);
            $table->char('collage',2);
            $table->string('email',50)->unique();
            $table->char('password',64);
            $table->integer('type');
            $table->boolean('active');
            $table->integer('cridits')->nullable(true);
            $table->float('gpa')->nullable();
            $table->timestamps();
            
            
                               //<<<<foreigns>>>>>>>
            //$table->foreign("department_id")->references("department_id")->on("departments");
            
            //$table->primary("id");
        });
        
    }

    
     /* Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};