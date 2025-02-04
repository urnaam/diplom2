<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('History', function (Blueprint $table) {
            $table->increments('id');
            $table->string('his_per_reg_num');
            $table->string('his_emch_reg_num');
            $table->string('his_diag_id');
            $table->string('his_note');
            $table->string('his_pic');
            $table->string('his_jor');
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
        Schema::drop('History');
    }
}
