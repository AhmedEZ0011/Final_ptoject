<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('id', 10)->primary()->comment('رقم قيد الطالب');
            $table->string('name', 40)->comment('اسم الطالب');
            $table->char('department_id', 2)->comment('رابط القسم');
            $table->string('email', 50)->comment('البريد الإلكتروني');
            $table->enum('gender', ['MALE', 'FEMALE'])->comment('الجنس');
            $table->dateTime('reg_date')->comment('تاريخ القبول كطالب مشروع');
            $table->char('password', 64)->comment('كلمة المرور باستخدام SHA256');
            $table->tinyInteger('credits')->unsigned()->comment('عدد الوحدات المجتازة');
            $table->double('gpa', 8, 2)->comment('المعدل التراكمي');
            $table->integer('employee_id')->comment('رابط الموظف المسؤول عن اتمام التسجيل');

            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            // إضافة المفتاح الأجنبي
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade');
           //$table->foreign('employee_id')->references('id')->on('employees')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
