<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeschedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('clss_id');
            $table->integer('formonth_no');
            $table->integer('foryear_no');
            $table->integer('total_fee');
            $table->string('feestructure')->nullable();
            $table->integer('total_fee_discount')->nullable();
            $table->string('status')->nullable();
            $table->integer('session_id');
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
        Schema::dropIfExists('feeschedules');
    }
}
