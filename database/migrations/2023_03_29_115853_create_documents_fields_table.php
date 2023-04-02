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
        Schema::create('documents_fields', function (Blueprint $table) {
            $table->unsignedBigInteger('field_id');
            $table->unsignedBigInteger('document_id');
            $table->primary(['field_id','document_id']);
            $table->foreign('field_id',)->on('fields')->references('id');
            $table->foreign('document_id',)->on('documents')->references('id');
            $table->string("pdf_field_name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents_fields');
    }
};
