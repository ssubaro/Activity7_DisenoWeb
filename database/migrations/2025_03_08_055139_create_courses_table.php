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
        $table->id();
        $table->string('course_key')->unique();
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('course_cover')->nullable(); // Path to the image file
        $table->foreignId('robotics_kit_id')->constrained();
        $table->foreignId('teacher_id')->nullable()->constrained('teachers');
        $table->timestamps();
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
