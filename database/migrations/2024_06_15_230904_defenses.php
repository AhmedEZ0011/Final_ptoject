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
       
            Schema::create('defenses', function (Blueprint $table) {
                $table->id('id');
                $table->integer('defenseapp_id')->unsigned();
                $table->datetime('date');
                $table->binary('document_flag')->nullable();
                $table->text('decission')->nullable();
                $table->string('decission_maker', 50)->nullable();
                $table->year('academic_year');
                $table->enum('academic_term', ['SPRING', 'FALL']);
                $table->timestamps();
                
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defenses');
    }
};
