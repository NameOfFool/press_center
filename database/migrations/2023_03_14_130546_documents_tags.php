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
        Schema::create("documents_tags",function (Blueprint $table){
            $table->unsignedBigInteger('document_id');
            $table->unsignedBigInteger('tag_id');
            $table->primary(['document_id','tag_id']);
            $table->foreign('document_id',)->on('documents')->references('id');
            $table->foreign('tag_id',)->on('tags')->references('id');
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
