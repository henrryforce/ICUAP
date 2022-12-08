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
        Schema::create('Articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('ano_publicacion');
            $table->string('doi');
            $table->longText('autores');
            $table->foreignId('investigador_id')->constrained('investigadores')->onDelete('cascade');
            $table->foreignId('journal_id')->constrained('journals')->onDelete('cascade');
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
        Schema::dropIfExists('Articulos');
    }
};
