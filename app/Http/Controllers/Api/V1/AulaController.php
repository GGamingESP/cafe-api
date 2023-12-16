<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Aula;
use App\Http\Controllers\Controller;
use App\Http\Resources\AulaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $aula = Aula::all();
        return response()->json(['aula' => AulaResource::collection($aula)], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:250',
            'location' => 'required|string|max:100'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 403);
        }

        $aula = Aula::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        $data['aula'] = $aula;

        $response = [
            'status' => 'success',
            'message' => 'Aula is created successfully.',
            'data' => $data,
        ];

        return response()->json($response, 201);
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
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:250',
            'location' => 'required|string|max:100'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 403);
        };

        $aula->update($request->all());
        return  response()->json("Ok", 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aula $aula)
    {
        //
        Aula::find($aula)->delete();
        return  response()->json("Ok", 201);
    }
}
