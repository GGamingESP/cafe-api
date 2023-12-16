<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'turno'
    ];

    public function modulos(): HasMany
    {
        return $this->hasMany(Modulo::class);
    }
}
