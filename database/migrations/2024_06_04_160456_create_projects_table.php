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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('رقم المشروع');
            $table->unsignedBigInteger('proposal_id')->comment('رابط المقترح');
            $table->enum('status', ['INPROGRESS', 'IDLE', 'DONE'])->comment('حالة المشروع');
            $table->unsignedBigInteger('supervisor_id')->comment('رابط المشرف');
            $table->dateTime('start_date')->comment('تاريخ بدء المشروع');
            $table->dateTime('end_date')->comment('تاريخ انتهاء المشروع');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            // إضافة المفاتيح الأجنبية
            //$table->foreign('proposal_id')->references('id')->on('proposals')->onUpdate('cascade');
            //$table->foreign('supervisor_id')->references('id')->on('faculties')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
