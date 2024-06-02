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
        Schema::create('defense_apps', function (Blueprint $table) {
            $table->integer('id')->comment('معرف المناقشة')->primary();
            $table->string('student_id', 10)->comment('رابط الطلبة')->index();
            $table->integer('superviser_id')->comment('رابط المشرف')->index();
            $table->dateTime('app_date')->comment('تاريخ التقديم');
            $table->enum('decission', ['refused', 'accepted'])->comment('القرار');
            $table->string('decission_maker', 40)->comment('صانع القرار');
            $table->dateTime('decission_date')->comment('تاريخ القرار');
            $table->text('comments')->comment('الملاحظات');
            $table->dateTime('expected_date')->comment('التاريخ المتوقع للمناقشة');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            // إضافة المفاتيح الأجنبية
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade');
            //$table->foreign('supervisor_id')->references('id')->on('faculties')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defense_apps');
    }
};
