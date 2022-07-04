<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotTechnicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tot_technicals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("HISProductVersion");
            $table->string("Video");
            $table->string("JobAid");
            $table->string("Description");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tot_technicals');
    }
}
