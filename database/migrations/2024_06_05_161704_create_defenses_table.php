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
            $table->bigIncrements('id')->comment('رقم المناقشة');
            $table->unsignedBigInteger('project_id')->length(20)->comment('رابط المشروع')->index();
            $table->enum('type', ['Initial', 'final'])->comment('نوع المناقشة');
            $table->dateTime('date')->comment('تاريخ المناقشة');
            $table->boolean('document_flag')->length(2)->comment('علامة التوثيق');
            $table->text('decission')->comment('القرار');
            $table->string('decission_maker', 50)->comment('صانع القرار');
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
        Schema::dropIfExists('defenses');
    }
};
