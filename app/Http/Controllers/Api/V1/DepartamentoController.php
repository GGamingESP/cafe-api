<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\DepartamentoResource;
use App\Models\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departamento = Departamento::all();
        return response()->json(['departamentos' => DepartamentoResource::collection($departamento)], 200);
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

        $departamento = Departamento::create([
            'name' => $request->name
        ]);

        $data['departamento'] = $departamento;

        $response = [
            'status' => 'success',
            'message' => 'Departamento is created successfully.',
            'data' => $data,
        ];

        response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        //
        return new DepartamentoResource($departamento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        //
        Departamento::find($departamento)->delete();
        return  response()->json("Ok", 201);
    }

    public function todosUsuarios(Departamento $departamento)
    {
        $users = $departamento->user()->get();
        return response()->json(['usuarios' => UserResource::collection($users)], 200);
    }
}
