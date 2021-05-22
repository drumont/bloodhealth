<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bloods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quantity');
            $table->string('rhesus');
            $table->string('blood_group');
            $table->integer('user_id')->unsigned();
            $table->integer('center_id')->unsigned();
            $table->rememberToken();
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
        Schema::dropIfExists('bloods');
    }
}
