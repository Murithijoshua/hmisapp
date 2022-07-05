<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingserversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainingservers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("ServerName");
            $table->string("Description");
            $table->string("LoginUsername")->nullable("Not required");
            $table->string("LoginPass")->nullable("Not required");
            $table->string("link");
            $table->string("github");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainingservers');
    }
}
