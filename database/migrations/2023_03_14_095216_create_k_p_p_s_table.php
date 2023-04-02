<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_p_p_s', function (Blueprint $table) {
            $table->unsignedBigInteger("id")->primary();
            $table->string("KPP");
        });
        Schema::table("k_p_p_s",function (Blueprint $table){
            $table->foreign("id")->
            references("id")->on("organisations");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k_p_p_s');
    }
};
