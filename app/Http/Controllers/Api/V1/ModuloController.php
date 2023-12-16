<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\ModuloResource;
use App\Models\Modulo;
use App\Http\Controllers\Controller;
use App\Http\Resources\AulaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $modulos = Modulo::all();

        return  ModuloResource::collection($modulos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'codigo' => 'required|string',
            'materia' => 'required|string',
            'h_semanales' => 'required|integer',
            'h_totales' => 'required|integer',
            'user_id' => 'required|integer',
            'especialidad_id' => 'required|integer'
        ]);

        $data = $validator->validated();

        $modulo = Modulo::create($data);

        return response()->json(['modulo' => $modulo], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Modulo $modulo)
    {
        //

        return new ModuloResource($modulo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modulo $modulo)
    {
        //
        $validator = Validator::make($request->all(), [
            'distribucion' => 'required|string',
            'user_id' => 'required|integer',
        ]);

        $data = $validator->validated();

        $modulo->update($request->all());

        return response()->json(['message' => 'Modulo actualizado correctamente'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modulo $modulo)
    {
        //
        $modulo->delete();

        return response()->json(['message' => 'Modulo eliminado correctamente'], 200);
    }

    public function todasAulas(Modulo $modulo)
    {
        $aula = $modulo->aula()->get();
        return response()->json(['aulas' => AulaResource::collection($aula)], 200);
    }
}
