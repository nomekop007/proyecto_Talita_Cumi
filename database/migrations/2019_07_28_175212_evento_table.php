<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('tituloEvento');
            $table->text('descripcionEvento');
            $table->String('URLfoto');
            $table->String('estado'); //activo / inactivo
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
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
        Schema::dropIfExists('eventos');
    }
}
