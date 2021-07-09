<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->integer('edad');
            $table->Text('descripcion');
            $table->timestamps();
        });

        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('idLibro');
            $table->string('titulo');
            $table->text('resumen');
            $table->integer('hojas');
            $table->integer('cantidadEdiciones');
            $table->string('editorial');
            $table->unsignedBigInteger('idAutor');
            $table->foreign('idAutor')->references('id')->on('autors');
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
        Schema::dropIfExists('libros');
        Schema::dropIfExists('autors');

    }
}
