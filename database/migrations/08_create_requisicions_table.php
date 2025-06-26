<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
         Schema::create('requisicions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->string('estado');
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('requisicions');
    }
};
