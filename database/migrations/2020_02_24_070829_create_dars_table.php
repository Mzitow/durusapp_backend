<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dars', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('scholar_id');
            $table->foreign('scholar_id')->references('id')->on('scholars');
            $table->unsignedbiginteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedbiginteger('dars_type_id');
            $table->foreign('dars_type_id')->references('id')->on('dars_type');
            $table->string('duration');
            $table->string('dars_title');
            $table->string('location');
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
        Schema::dropIfExists('dars');
    }
}
