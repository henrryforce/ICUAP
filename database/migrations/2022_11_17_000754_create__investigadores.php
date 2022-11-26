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
        Schema::create('investigadores', function (Blueprint $table) {
            $table->id();
            $table->string("nombres");
            $table->string("apellido_paterno");
            $table->string("apellido_materno");
            $table->foreignId('correo_id')->constrained('correos')->onDelete('cascade');
            $table->foreignId("centro_adscripcion_id")->constrained('centros_adscripcions')->onDelete('cascade');
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
        Schema::dropIfExists('investigadores');
    }
};
