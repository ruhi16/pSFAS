<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentdbs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admbkno')->nullable()->default(null);
            $table->integer('admslno')->nullable()->default(null);
            $table->date('admdate')->nullable()->default(null);
            $table->string('name');
            $table->date('dobirth')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->string('adhaar')->nullable()->default(null);
            $table->integer('adm_clss_id')->nullable()->default(null);
            $table->string('nation')->nullable()->default(null);
            $table->string('phchlng')->nullable()->default(null);
            $table->string('phchlngdsc')->nullable()->default(null);
           

            $table->string('fname')->nullable()->default(null);
            $table->string('fadhaar')->nullable()->default(null);
            $table->string('foccup')->nullable()->default(null);
            $table->string('fmobno')->nullable()->default(null);
            $table->string('mname')->nullable()->default(null);
            $table->string('madhaar')->nullable()->default(null);
            $table->string('moccup')->nullable()->default(null);
            $table->string('mmobno')->nullable()->default(null);
            $table->string('gname')->nullable()->default(null);
            $table->string('gadhaar')->nullable()->default(null);
            $table->string('goccup')->nullable()->default(null);
            $table->string('gmobno')->nullable()->default(null);
            $table->string('vill')->nullable()->default(null);
            $table->string('post')->nullable()->default(null);
            $table->string('pols')->nullable()->default(null);
            $table->string('dist')->nullable()->default(null);
            $table->string('pinn')->nullable()->default(null);

            $table->string('knlang')->nullable()->default(null);            
            $table->string('rlgion')->nullable()->default(null);
            $table->string('caste')->nullable()->default(null);
            
            
            $table->string('fmlystatus')->nullable()->default(null);
            $table->string('fmlystatusdsc')->nullable()->default(null); 

            $table->string('bankname')->nullable()->default(null);
            $table->string('branch')->nullable()->default(null);
            $table->string('ifsc')->nullable()->default(null);
            $table->string('accno')->nullable()->default(null);
            $table->string('acctype')->nullable()->default(null);

            $table->string('status')->nullable()->default(null);
            $table->string('remarks')->nullable()->default(null);
            $table->integer('pagestatus')->nullable()->default(null);
            $table->string('imagename')->nullable()->default(null);
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
        Schema::dropIfExists('studentdbs');
    }
}
