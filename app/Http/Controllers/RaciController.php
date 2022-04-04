<?php

namespace App\Http\Controllers;

use App\Models\Raci;
use App\Http\Requests\StoreraciRequest;
use App\Http\Requests\UpdateraciRequest;

class RaciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            [
                "data" => Raci::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreraciRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreraciRequest $request)
    {
        $raci = new Raci();
        $raci->gestion_programas = $request->input('gestionProgramas');
        $raci->iniciar_programa = $request->input('iniciarPrograma');
        $raci->gestionar_compromiso = $request->input('gestionarCompromiso');
        $raci->mantener_programa = $request->input('mantenerPrograma');
        $raci->ejecutar_programa = $request->input('ejecutarPrograma');
        $raci->informe_programa = $request->input('informePrograma');
        $raci->iniciar_proyectos = $request->input('iniciarProyectos');
        $raci->planificar_proyectos = $request->input('planificarProyectos');
        $raci->gestionar_calidad_programas = $request->input('gestionarCalidadProgramas');
        $raci->gestionar_riesgo_programas = $request->input('gestionarRiesgoProgramas');
        $raci->controlar_proyectos = $request->input('controlarProyectos');
        $raci->gestionar_recursos = $request->input('gestionarRecursos');
        $raci->cerrar_proyecto = $request->input('cerrarProyecto');
        $raci->cerrar_programa = $request->input('cerrarPrograma');
        $raci->save();
        return response()->json([
            "data" => $raci
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\raci  $raci
     * @return \Illuminate\Http\Response
     */
    public function show(raci $raci)
    {
        return response()->json([
            "data" => $raci
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateraciRequest  $request
     * @param  \App\Models\raci  $raci
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateraciRequest $request, raci $raci)
    {
        $raci->gestion_programas = $request->input('gestionProgramas');
        $raci->iniciar_programa = $request->input('iniciarPrograma');
        $raci->gestionar_compromiso = $request->input('gestionarCompromiso');
        $raci->mantener_programa = $request->input('mantenerPrograma');
        $raci->ejecutar_programa = $request->input('ejecutarPrograma');
        $raci->informe_programa = $request->input('informePrograma');
        $raci->iniciar_proyectos = $request->input('iniciarProyectos');
        $raci->planificar_proyectos = $request->input('planificarProyectos');
        $raci->gestionar_calidad_programas = $request->input('gestionarCalidadProgramas');
        $raci->gestionar_riesgo_programas = $request->input('gestionarRiesgoProgramas');
        $raci->controlar_proyectos = $request->input('controlarProyectos');
        $raci->gestionar_recursos = $request->input('gestionarRecursos');
        $raci->cerrar_proyecto = $request->input('cerrarProyecto');
        $raci->cerrar_programa = $request->input('cerrarPrograma');
        $raci->save();
        return response()->json([
            "data" => $raci
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\raci  $raci
     * @return \Illuminate\Http\Response
     */
    public function destroy(raci $raci)
    {
        $raci->delete();
        return response()->json([
            "data" => $raci
        ]);
    }
}
