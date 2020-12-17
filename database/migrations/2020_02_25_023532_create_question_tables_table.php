<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedbiginteger('scholar_id');
            $table->foreign('scholar_id')->references('id')->on('scholars');
            $table->unsignedbiginteger('dars_id')->nullable();
            $table->foreign('dars_id')->references('id')->on('dars');
            $table->text('answer');
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
        Schema::dropIfExists('question_tables');
    }
}
