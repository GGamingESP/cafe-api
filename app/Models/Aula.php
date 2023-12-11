<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'localizacion'
    ];

    public function modulos(): BelongsToMany
    {
        return $this->belongsToMany(Modulo::class, 'aula_modulo', 'aula_id', 'modulo_id');
    }
}
