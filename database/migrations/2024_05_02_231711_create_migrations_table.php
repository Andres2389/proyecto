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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_rol');
            $table->timestamps();
        });

        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento');
            $table->timestamps();
        });

        Schema::create('tipo_etapa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_etapa');
            $table->timestamps();
        });

        Schema::create('programa_formacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_programa');
            $table->timestamps();
        });

        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_ficha');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreignId('id_programa')->constrained('programa_formacion');
            $table->timestamps();
        });

      

        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('users');
            $table->string('numero_bitacora');
            $table->text('comentarios');
            $table->string('estado');
            $table->text('planeacion');
            $table->foreignId('instructor_id')->nullable()->constrained('users');
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
        Schema::dropIfExists('bitacoras');
        Schema::dropIfExists('users');
        Schema::dropIfExists('fichas');
        Schema::dropIfExists('programa_formacion');
        Schema::dropIfExists('tipo_etapa');
        Schema::dropIfExists('documentos');
        Schema::dropIfExists('roles');
    }
};
