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
        Schema::create('advertisements_members', function (Blueprint $table) {
            $table->bigInteger('ad_id');
            $table->bigInteger('target_id');
            $table->tinyInteger('seen')->default(0)->length(1);
            
            
            $table->timestamps(); //إذا كنت ترغب في إضافة created_at,update_at
            
            //$table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("ad_id")->references("id")->on("advertisements")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("target_id")->references("id")->on("users")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('advertisements_members');
    }
};
