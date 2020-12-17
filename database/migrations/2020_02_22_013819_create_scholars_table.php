<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title')->default('sheikh');
            $table->string('name');
            $table->string('gender');
            $table->boolean('active')->default(0)->change();
            $table->unsignedbiginteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('address')->nullable();
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
        Schema::dropIfExists('scholars');
    }
}
