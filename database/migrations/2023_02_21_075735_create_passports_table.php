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
        Schema::create('passports', function (Blueprint $table) {
            $table->unsignedBigInteger("id")->primary();
            $table->foreign('id')->nullable()
                ->references("id")->on("users")->onUpdate("Cascade")->onDelete("Cascade");
            $table->date("birth_data");
            $table->char('sex',1);
            $table->string("series");
            $table->string("number",4);
            $table->date("date_of_issue");
            $table->string("issued_by");
            $table->string("code");
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
        Schema::dropIfExists('passports');
    }
};
