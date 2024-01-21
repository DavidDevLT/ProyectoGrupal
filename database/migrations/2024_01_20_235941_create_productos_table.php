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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('codigoProducto',8)->unique();
            $table->string('nombre',20);
            $table->string('descripcion',255);
            $table->decimal('precioSoles',10,2);
            $table->integer('stock');
            $table->string('correo',50);
            $table->unsignedBigInteger('idProveedor');
            $table->foreign('idProveedor')->references('id')->on('proveedores');

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
        Schema::dropIfExists('productos');
    }
};
