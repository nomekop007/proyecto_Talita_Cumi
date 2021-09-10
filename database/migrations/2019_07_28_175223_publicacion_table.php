<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
       Schema::defaultStringLength(191);
       Schema::create('publicacions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('tituloPublicacion')->nullable();
            $table->text('descripcionPublicacion')->nullable();
            $table->String('URLpublicacion');
            $table->String('estado'); //activo / inactivo 
            $table->integer('tipo'); // 1:Foto , 2:video
            $table->integer('categoria'); 
            //1:Galeria multimedia , 2:Pagina de inicio , 3:Tienda online
            $table->integer('precio')->nullable(); // en caso de der tienda online 
            $table->timestamps();
            $table->String('creator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('publicacions');
    }
}
