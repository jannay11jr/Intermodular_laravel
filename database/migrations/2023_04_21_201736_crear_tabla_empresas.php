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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id')->nullable();
            $table->string('cif') ->unique();
            $table->string('nombre_empresa');
            $table->text('descripcion');
            $table->string('notas');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('direccion');
            $table->string('provincia');
            $table->string('poblacion');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
