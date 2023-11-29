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
        Schema::create('pacientes', function (Blueprint $table) {
            //Se crea la tabla pacientes con los campos id, documento de identidad, tipo de documento, nombre, apellido, fecha de nacimiento, telefono, email, direccion, ciudad

            $table->id();
            $table->string('tipo_documento', 20);
            $table->string('documento', 20);
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->date('fecha_nacimiento');
            $table->string('telefono', 20);
            $table->string('email', 50);
            $table->string('direccion', 50);
            $table->string('ciudad', 50);
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
        Schema::dropIfExists('pacientes');
    }
};
