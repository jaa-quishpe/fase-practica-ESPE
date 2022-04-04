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
        Schema::create('racis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->json('gestion_programas')->comment('Mantener un enfoque estándar para la gestión de programas y proyectos');
            $table->json('iniciar_programa')->comment('Iniciar el Programa');
            $table->json('gestionar_compromiso')->comment('Gestionar el compromiso de las partes interesadas');
            $table->json('mantener_programa')->comment('Desarrollar y mantener el plan de programa');
            $table->json('ejecutar_programa')->comment('Lanzar y ejecutar el programa');
            $table->json('informe_programa')->comment('Supervisar,controlar e informar de los resultados del programa');
            $table->json('iniciar_proyectos')->comment('Lanzar e iniciar proyectos dentro de un programa');
            $table->json('planificar_proyectos')->comment('Planificar proyectos');
            $table->json('gestionar_calidad_programas')->comment('Gestionar la calidad de los programas y proyectos');
            $table->json('gestionar_riesgo_programas')->comment('Gestionar el riesgo de los programas y proyectos');
            $table->json('controlar_proyectos')->comment('Supervisar y controlar proyectos');
            $table->json('gestionar_recursos')->comment('Gestionar los recursos y los paquetes de trabajo del proyecto');
            $table->json('cerrar_proyecto')->comment('Cerrar un proyecto o iteracion');
            $table->json('cerrar_programa')->comment('Cerrar un programa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racis');
    }
};
