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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fichas_id');
            $table->string('numero_ficha');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreignId('id_programa')->constrained('programa_formacion');
            $table->timestamps();
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
