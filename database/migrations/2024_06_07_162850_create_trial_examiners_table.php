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
        Schema::create('trial_examiners', function (Blueprint $table) {
            $table->bigIncrements('examiner_id')->comment('رقم الممتحن');
            $table->unsignedBigInteger('trial_id')->comment('رقم التقييم المبدئي');
            $table->dateTime('asseigment_date')->comment('تاريخ التعيين');
            $table->text('opinion')->comment('الرأي');
            $table->text('comments')->comment('التعليقات');
            $table->unsignedBigInteger('project_id')->length(20)->comment('رابط المشروع')->index();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

             // إضافة المفاتيح الأجنبية
             $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trial_examiners');
    }
};
