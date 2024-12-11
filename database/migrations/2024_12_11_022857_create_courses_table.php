<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('courses', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('course_name'); // Name of the course
        $table->string('course_index')->unique(); // Unique index for the course, e.g., HTTP5110
        $table->text('course_description')->nullable(); // Optional description for the course
        $table->timestamps(); // Created at and updated at timestamps
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
