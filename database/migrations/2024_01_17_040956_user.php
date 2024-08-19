<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


     /* Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('name',40);
            $table->bigInteger('department_id');
            $table->char('collage',50);
            $table->string('email',50)->unique();
            $table->char('password',64);
            $table->integer('type');
            $table->boolean('active')->default(false);
            $table->integer('cridits')->nullable(true);
            $table->float('gpa')->nullable();
            $table->timestamps();


                               //<<<<foreigns>>>>>>>
            $table->foreign("department_id")->references("id")->on("departments");

            $table->primary("id");
        });

    }


     /* Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
