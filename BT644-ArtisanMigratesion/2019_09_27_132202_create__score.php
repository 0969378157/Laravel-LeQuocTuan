<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Score', function (Blueprint $table) {
            $table->bigIncrements('rollNo_student_external')->references('rollNo')->on('Student');
            $table->integer('id_subject_external')->references('id_subject')->on('subject');
            $table->integer('Score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Score');
    }
}
