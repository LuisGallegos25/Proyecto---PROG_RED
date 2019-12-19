<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefensasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defensas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->text('correo');
            $table->string('identificacion');
            $table->text('direccion');
            $table->text('estado');
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
        Schema::dropIfExists('defensas');
    }
}
