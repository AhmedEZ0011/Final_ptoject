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
        Schema::create('trial_examiners', function (Blueprint $table) {
            $table->integer('examiner_id')->length(15);
            $table->integer('trial_id')->length(10);
            $table->datetime('asseigment_date');
            $table->string('opinion');
            $table->string('comments');
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
        Schema::dropIfExists('trial_examiners');
    }
};