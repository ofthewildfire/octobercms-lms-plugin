<?php

use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLmsTables extends Migration
{
    public function up()
    {
        Schema::create('octobercms_lms_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('octobercms_lms_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('octobercms_lms_categories')->onDelete('cascade');
        });

        Schema::create('octobercms_lms_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('section_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('section_id')->references('id')->on('octobercms_lms_sections')->onDelete('cascade');
        });

        Schema::create('octobercms_lms_lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->string('title');
            $table->text('content');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('octobercms_lms_courses')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('octobercms_lms_lessons');
        Schema::dropIfExists('octobercms_lms_courses');
        Schema::dropIfExists('octobercms_lms_sections');
        Schema::dropIfExists('octobercms_lms_categories');
    }
}