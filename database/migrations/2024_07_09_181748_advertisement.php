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
        //
        Schema::create('advertisements', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('title',150)->nullable(true);
            $table->string('content');
            $table->bigInteger('owner');
            $table->enum('targets',['STUDENTS','FACULTIES','OFFICERS', 'ALL', 'SPECIFIC'])->default("STUDENTS");
            $table->tinyInteger('enabled')->default(0)->length(1);
            
            
            $table->timestamps(); //إذا كنت ترغب في إضافة created_at,update_at
            
            //$table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("owner")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            //$table->foreign("specific_target")->references("id")->on("users")->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('advertisements');
    }
};
