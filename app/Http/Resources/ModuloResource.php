<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ModuloResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'codigo' => $this->codigo,
            'materia' => $this->materia,
            'horas_semanales' => $this->h_semanales,
            'horas_totales' => $this->h_totales,
            'user_id' => $this->user_id,
            // Agrega otros campos según sea necesario
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
