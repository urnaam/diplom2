<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal', function (Blueprint $table) {
            $table->increments('userid');
            $table->string('name');
            $table->string('lastname');
            $table->string('cardNumber');
            $table->date('birthdate');
            $table->string('reg_num');
            $table->string('phone');
            $table->string('address');
            $table->string('gender');
            $table->string('user_pic');
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
        Schema::drop('user_personal');
    }
}
