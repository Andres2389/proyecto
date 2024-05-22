<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('rol')->default('aprendiz');
            $table->string('documento')->unique();
            $table->string('name');
            $table->string('apellidos');
            $table->string('correo_electronico')->unique();
            $table->string('contraseña');
            $table->string('telefono');
            $table->string('tipo_etapa');
            $table->string('programa_formacion');
            $table->string('ficha');
            $table->string('instructor_asignado');
            $table->timestamps();
        });
    }        

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('rol');
        });
    }
}
