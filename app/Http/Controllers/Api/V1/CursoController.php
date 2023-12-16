<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\CursoResource;
use App\Models\Curso;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModuloResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $curso = Curso::all();
        return response()->json(['curso' => CursoResource::collection($curso), 200]);
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

        $curso = Curso::create([
            'name' => $request->name
        ]);

        $data['curso'] = $curso;

        $response = [
            'status' => 'success',
            'message' => 'Curso is created successfully.',
            'data' => $data,
        ];

        response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
        return new CursoResource($curso);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        //
        Curso::find($curso)->delete();
        return  response()->json("Ok", 201);
    }

    public function todosModulos(Curso $curso)
    {
        // recordar que hay que hacer nueva ruta para esto
        $modulos = $curso->modulos()->get();
        return response()->json(['modulos' => ModuloResource::collection($modulos)], 200);
    }
}
