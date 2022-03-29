<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_estudiante', function (Blueprint $table) {
            $table->id();
            $table->string("Nom_estudiante");
            $table->string("Ape_estudiante");
            $table->string("Direccion");
            $table->integer("Telefono")->nullable();
            $table->string("Tipo_doc");
            $table->integer("Num_doc");
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
        Schema::dropIfExists('_estudiante');
    }
}
