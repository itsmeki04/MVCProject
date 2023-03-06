<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->string('name');
            $table->string('firstname');
            $table->string('secondname');
            $table->string('thirdname');
            $table->string('fourthname');
            $table->string('fifthname');
            $table->string('sixth');
            $table->string('seventh');
            $table->string('eight');
            $table->string('ninth');
            $table->string('tenth');
            $table->string('eleventh');
            $table->string('twelvth');
            $table->string('thirteenth');
            $table->string('fourteenth');
            $table->string('fifteenth');
            $table->string('sixteenth');
            $table->string('seventeenth');
            $table->string('eightteenth');
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
        Schema::dropIfExists('data');
    }
}
