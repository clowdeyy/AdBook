<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc1')->nullabe();
            $table->string('desc2')->nullabe();
            $table->string('offer1')->nullabe();
            $table->string('offer2')->nullabe();
            $table->string('offer3')->nullabe();
            $table->string('offer4')->nullabe();
            $table->string('offer5')->nullabe();
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
        Schema::dropIfExists('information');
    }
}
