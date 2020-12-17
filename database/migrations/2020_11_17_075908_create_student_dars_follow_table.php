<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDarsFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_dars_follow', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedbiginteger('dars_id');
            $table->foreign('dars_id')->references('id')->on('dars');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_dars_follow');
    }
}
