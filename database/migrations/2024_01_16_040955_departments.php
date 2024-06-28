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
        Schema::create('departments', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->char('department_id', 2);
            $table->string('name', 50);
            $table->integer('chief_id')->nullable();
            $table->integer('coordinator_id')->nullable();
            $table->timestamps();
    
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
