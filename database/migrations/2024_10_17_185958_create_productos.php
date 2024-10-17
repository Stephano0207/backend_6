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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idproducto');
            $table->string('descripcion');
            $table->unsignedBigInteger('idcategoria');
            $table->float('precio');
            $table->unsignedBigInteger('cantidad')->default(0);
            $table->tinyInteger('estado')->default(1);
            $table->foreign('idcategoria')->references('idcategoria')->on('categorias');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
