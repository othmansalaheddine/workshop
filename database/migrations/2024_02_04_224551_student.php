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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->unsignedBigInteger('course_id');
            $table->foreign('phone_id')->references('id')->on('phones');
            $table->unsignedBigInteger('phone_id');
           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
         

    }
};
