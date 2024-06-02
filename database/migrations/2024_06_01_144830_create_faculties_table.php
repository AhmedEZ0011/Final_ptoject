<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('faculties');

        Schema::create('faculties', function (Blueprint $table) {
            $table->increments('id')->comment('رقم عضو هيئة التدريس'); // تعيين id كمفتاح رئيسي
            $table->string('name', 50)->comment('اسم عضو هيئة التدريس');
            $table->string('password', 60)->comment('الرمز السري');
            $table->string('email', 50)->comment('البريد الإلكتروني');
            $table->enum('type', ['cooperater', 'employee'])->comment('الصفه');
            $table->char('department_id', 2)->comment('رابط القسم'); // متطابقة مع department_id في departments
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            // إضافة المفتاح الأجنبي
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
}
