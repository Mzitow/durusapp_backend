<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholar_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('scholar_categories');
    }
}
