<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('credencials', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario');
            $table->string('contrasena');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('credencials');
    }
};
