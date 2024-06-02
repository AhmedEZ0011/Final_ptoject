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
        Schema::create('monthly_reports', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('رقم التقرير');
            $table->dateTime('app_date')->comment('تاريخ تقديم المقترح');
            $table->string('student_id', 10)->comment('رابط الطالب')->index();
            $table->bigInteger('project_id')->comment('رابط المشروع')->index();
            $table->bigInteger('supervisor_id')->comment('رابط المشرف')->index();
            $table->text('comments')->comment('التعليقات');
            $table->text('contents')->comment('المحتويات');
            $table->enum('acceptance_status', ['accepted', 'pending', 'rejected'])->comment('حالة التقرير الشهري');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            // إضافة المفاتيح الأجنبية
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade');
            //$table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade');
            //$table->foreign('supervisor_id')->references('id')->on('faculties')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_reports');
    }
};
