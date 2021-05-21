<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvocesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoces', function (Blueprint $table) {
            $table->id();
            $table->integer("product_id");
            $table->integer("cantidad_producto");
            $table->integer("mount");
            $table->integer("cedula_cliente");
            $table->string("nombre_cliente");
            $table->integer("telefono_cliente");
            $table->string("correo_cliente");
            $table->string("direccion_cliente");
            $table->string("envio_premiun")->nullable();
            $table->integer("user_id");
            $table->integer("state_invoces")->default(1);
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
        Schema::dropIfExists('invoces');
    }
}
