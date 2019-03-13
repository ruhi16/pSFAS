<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logrecords', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('model_name');
            $table->string('method_name');
            $table->string('status')->nullable()->default(null);
            $table->string('remarks')->nullable()->default(null);
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
        Schema::dropIfExists('logrecords');
    }
}
