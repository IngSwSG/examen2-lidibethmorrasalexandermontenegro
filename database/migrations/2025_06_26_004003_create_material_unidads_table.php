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
        Schema::create('material_unidads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('unidad_id');
            $table->unsignedBigInteger('presupuesto_id');
            $table->integer('cantidad');
            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('unidad_id')->references('id')->on('unidads');
            $table->foreign('presupuesto_id')->references('id')->on('presupuestos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_unidads');
    }
};
