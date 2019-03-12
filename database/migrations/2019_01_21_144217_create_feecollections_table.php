<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeecollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feecollections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentcr_id');
            $table->integer('feeschedule_id');
            $table->integer('formonth_no');
            $table->integer('foryear_no');            
            $table->integer('fee_received');
            $table->integer('fee_pending');
            $table->integer('fee_discount')->nullable();
            $table->string('fee_discount_by')->nullable();            
            $table->string('status')->nullable();
            $table->integer('session_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('feecollections');
    }
}
