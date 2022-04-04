<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raci extends Model
{
    use HasFactory;

    protected $fillable = [
        "gestion_programas",
        "iniciar_programa",
        "gestionar_compromiso",
        "mantener_programa",
        "ejecutar_programa",
        "informe_programa",
        "iniciar_proyectos",
        "planificar_proyectos",
        "gestionar_calidad_programas",
        "gestionar_riesgo_programas",
        "controlar_proyectos",
        "gestionar_recursos",
        "cerrar_proyecto",
        "cerrar_programa",
    ];
}
