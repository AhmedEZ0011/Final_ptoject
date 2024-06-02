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
        Schema::create('proposal_students', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('رقم تسلسلي');
            $table->unsignedBigInteger('proposal_id')->comment('رابط المقترح');
            $table->string('student_id', 10)->comment('رابط الطالب')->unique();
            $table->dateTime('enrollment_date')->comment('تاريخ الالتحاق');
            $table->dateTime('withdrawal_date')->nullable()->comment('تاريخ الانسحاب');
            $table->float('grade')->comment('الدرجة');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            // إضافة المفاتيح الأجنبية
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade');
            //$table->foreign('proposal_id')->references('id')->on('proposals')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposal_students');
    }
};
