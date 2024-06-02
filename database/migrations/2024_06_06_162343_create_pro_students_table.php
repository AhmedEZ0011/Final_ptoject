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
        Schema::create('pro_students', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('رقم تسلسلي')->autoIncrement();
            $table->string('sid', 10)->comment('رقم قيد الطالب')->index();
            $table->string('name', 40)->comment('اسم الطالب');
            $table->char('department_id', 2)->comment('رابط القسم')->index();
            $table->string('email', 50)->comment('البريد الإلكتروني');
            $table->enum('gender', ['MALE', 'FEMALE'])->comment('الجنس');
            $table->dateTime('app_date')->comment('تاريخ التقديم كطالب مشروع');
            $table->bigInteger('pin')->comment('الرقم الخاص');
            $table->tinyInteger('credits')->comment('عدد الوحدات المجتازة');
            $table->float('gpa')->comment('المعدل التراكمي');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

             // إضافة المفتاح الأجنبي
             $table->foreign('sid')->references('id')->on('students')->onUpdate('cascade');
             $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_students');
    }
};
