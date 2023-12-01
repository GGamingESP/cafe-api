<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\EspecialidadResource;
use App\Models\Especialidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
