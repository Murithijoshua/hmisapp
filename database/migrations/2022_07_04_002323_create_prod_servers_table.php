<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_servers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('ServerName');
            $table->string("url");
            $table->string('githubLinks');
            $table->string('imageLink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prod_servers');
    }
}
