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
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id')->comment('رقم المقترح');
            $table->string('title', 100)->comment('عنوان المقترح');
            $table->string('title_sub', 100)->nullable()->comment('عنوان تفصيلي أو إضافي');
            $table->integer('last_proposal_id')->nullable()->comment('رابط آخر مقترح مقدم')->index();
            $table->string('applicant_id', 10)->comment('رابط الطالب الذي قدم المقترح')->index();
            $table->dateTime('app_date')->comment('تاريخ التقديم');
            $table->integer('supervisor_id')->nullable()->comment('رابط الأستاذ المشرف')->index();
            $table->enum('decision', ['PENDING', 'REFUSED', 'ACCEPTED'])->default('PENDING')->comment('القرار');
            $table->dateTime('decision_date')->nullable()->comment('تاريخ القرار');
            $table->tinyInteger('enabled')->default(1)->comment('هل فعال أم معطل');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            // إضافة المفتاح الأجنبي
            $table->foreign('applicant_id')->references('id')->on('students')->onUpdate('cascade');
            // $table->foreign('supervisor_id')->references('id')->on('faculties')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
