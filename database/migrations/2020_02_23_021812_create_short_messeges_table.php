<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortMessegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_messeges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('scholar_id');
            $table->foreign('scholar_id')->references('id')->on('scholars');
            $table->string('messege_type');
            $table->string('messege_content');
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
        Schema::dropIfExists('short_messeges');
    }
}
