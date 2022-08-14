<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_organizacion');
            $table->string('nombre');
            $table->string('duracion');
            $table->string('descripcion');
            $table->string('estado');
            $table->string('supervision');
            $table->date('Fecha_inicio');
            $table->date('Fecha_culminacion');
            $table->integer('Costo_Final');
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
        Schema::dropIfExists('ventas');
    }
}
