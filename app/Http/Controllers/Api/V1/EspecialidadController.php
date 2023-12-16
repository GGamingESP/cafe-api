<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\EspecialidadResource;
use App\Models\Especialidad;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModuloResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return response()->json(['especialidad' => EspecialidadResource::collection()], 200);
        $especialidad = Especialidad::all();
        return response()->json(['especialidad' => EspecialidadResource::collection($especialidad)], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:250',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 403);
        }

        $especialidad = Especialidad::create([
            'name' => $request->name
        ]);

        $data['especialidad'] = $especialidad;

        $response = [
            'status' => 'success',
            'message' => 'Especialidad is created successfully.',
            'data' => $data,
        ];

        response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Especialidad $especialidad)
    {
        //
        // return ;
        return new EspecialidadResource($especialidad);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especialidad $especialidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especialidad $especialidad)
    {
        //
    }

    public function todosModulos(Especialidad $especialidad)
    {
        $modulos = $especialidad->Modulo()->get();
        return response()->json(['modulos' => ModuloResource::collection($modulos)], 200);
    }
}
