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
        Schema::create('proposal_reviews', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('رقم تسلسلي');
            $table->unsignedBigInteger('proposal_id')->comment('رقم المقترح');
            $table->unsignedBigInteger('faculty_id')->comment('رقم عضو هيئة التدريس');
            $table->dateTime('assignment_date')->comment('تاريخ التكليف');
            $table->enum('opinion', ['GOOD', 'FAIR', 'BAD'])->nullable()->comment('التقييم');
            $table->dateTime('opinion_date')->nullable()->comment('تاريخ إعطاء الرأي');
            $table->text('comments')->nullable()->comment('التعليقات');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            // إضافة المفاتيح الأجنبية
           // $table->foreign('proposal_id')->references('id')->on('proposals')->onUpdate('cascade');
            //$table->foreign('faculty_id')->references('id')->on('faculties')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposal_reviews');
    }
};
