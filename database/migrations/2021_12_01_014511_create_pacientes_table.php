<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id_paciente');
            $table->string('numero_de_seguro',100 )-> Unique();
            $table->string('nombre_completo',100);
            $table->string('direccion',100)-> Unique();
            $table->string('dui',9)-> Unique();
            $table->string('nit',25)-> Unique();
            $table->string('numero_de_telefono',25)-> Unique();
            $table->date('fecha_de_nacimiento');
            $table->string('genero',15);
            $table->string('estado',20);
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
}
