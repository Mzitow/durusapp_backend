<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentScholarFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_scholar_follows', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedbiginteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
             $table->unsignedbiginteger('scholar_id');
            $table->foreign('scholar_id')->references('id')->on('scholars');
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
        Schema::dropIfExists('student_scholar_follows');
    }
}
