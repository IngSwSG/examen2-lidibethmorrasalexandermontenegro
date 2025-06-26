<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item_requisicions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('requisicion_id');
            $table->unsignedBigInteger('material_id');
            $table->integer('cantidad');
            $table->integer('cantidad_aprobada');
            $table->foreign('requisicion_id')->references('id')->on('requisicions');
            $table->foreign('material_id')->references('id')->on('materials');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('item_requisicions');
    }
};
