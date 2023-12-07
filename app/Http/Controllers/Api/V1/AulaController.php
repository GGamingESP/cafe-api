<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Aula;
use App\Http\Controllers\Controller;
use App\Http\Resources\AulaResource;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $aula = Aula::all();
        return response()->json(['especialidad' => AulaResource::collection($aula)], 200);
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
    public function show(Aula $aula)
    {
        //
        return new AulaResource($aula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aula $aula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aula $aula)
    {
        //
    }
}
