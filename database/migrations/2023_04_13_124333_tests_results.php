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
        Schema::create('tests_results', function (Blueprint $table) {
            $table->foreignId("user_id")->constrained("users");
            $table->unsignedBigInteger("question_id");
            $table->unsignedBigInteger("answer_id");
            $table->foreign(["question_id","answer_id"])->references(["question_id","id"])->on("answers");
            $table->primary(["user_id","answer_id","question_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
