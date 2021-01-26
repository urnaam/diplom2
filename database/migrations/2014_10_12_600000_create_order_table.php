<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order', function (Blueprint $table) {
            $table->increments('ord_id');
            $table->string('ord_per_reg_num');
            $table->string('ord_emch_reg_num');
            $table->date('ord_date');
            $table->string('ord_hour');
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
        Schema::drop('Order');
    }
}
