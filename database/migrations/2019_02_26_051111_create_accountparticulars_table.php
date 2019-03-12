<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountparticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountparticulars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('particular');
            $table->string('acctype');
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
        Schema::dropIfExists('accountparticulars');
    }
}
