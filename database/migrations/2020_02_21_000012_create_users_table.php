<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('usergroup_id');
            $table->foreign('usergroup_id')->references('id')->on('user_groups');
           $table->string('user_name',50);
           $table->text('password',50);
           $table->string('phone_number',50);
           $table->boolean('active')->default(0);
           $table->string('email',50)->nullable();
           $table->string('gender',50);
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
        Schema::dropIfExists('users');
    }
}
