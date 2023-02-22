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
        Schema::create('i_n_n_s', function (Blueprint $table) {
            $table->unsignedBigInteger("id")->primary();
            $table->foreign('id')->nullable()
                ->references("id")->on("users")->onUpdate("Cascade")->onDelete("Cascade");
            $table->integer("INN");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_n_n_s');
    }
};
