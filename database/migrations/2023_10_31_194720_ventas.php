<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('id_cliente')->unsigned();
            $table->bigInteger('id_empleado')->unsigned();
            $table->bigInteger('id_producto')->unsigned();
            $table->string('cantidad_producto');
            $table->string('tipo_pago');
            $table->date('fecha');

            $table->timestamps();

            $table->Foreign('id_cliente')->references('id')->on('clientes')->onDelete("cascade");
            $table->Foreign('id_empleado')->references('id')->on('empleados')->onDelete("cascade");
            $table->Foreign('id_producto')->references('id')->on('productos')->onDelete("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
