<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('title');
            $table->text('description');
            $table->decimal('pricing',9,2);
            $table->string('foto');
            $table->unsignedBigInteger('proveedor_id');            
            $table->foreign('proveedor_id')->references('id')->on('proveedor');
            $table->unsignedBigInteger('categoria_id');            
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->unsignedBigInteger('promocion_id');            
            $table->foreign('promocion_id')->references('id')->on('promocion');
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
        Schema::dropIfExists('products');
    }
}
