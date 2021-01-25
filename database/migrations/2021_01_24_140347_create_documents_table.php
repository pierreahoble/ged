<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id('id');
            $table->string('nomDocument')->nullable()->default('text');
            $table->string('description')->nullable()->default('text');
            $table->string('numRef')->nullable();
            $table->string('titreDocument')->nullable();
            $table->unsignedBigInteger('idType');
            $table->foreign('idType')->references('id')->on('types');
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users');
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
        Schema::dropIfExists('documents');
    }
}
