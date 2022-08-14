<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->text('Logo');
            $table->string('Nombre');
            $table->text('Telefono');
            $table->string('Correo');
            $table->string('Calle');
            $table->integer('No_Interior')->nullable();
            $table->integer('No_Exterior');
            $table->string('CodigoPostal');
            $table->string('Colonia');
            $table->string('Municipio');
            $table->string('Estado');
            $table->string('Giro');
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
        Schema::dropIfExists('organizaciones');
    }
}
