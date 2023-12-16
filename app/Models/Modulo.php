<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Modulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'materia',
        'h_semanales',
        'h_totales',
        'user_id',
        'especialidad_id',
        'curso_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function especialidade(): BelongsTo
    {
        return $this->belongsTo(Especialidad::class, "especialidad_id");
    }

    public function aula(): BelongsToMany
    {
        return $this->belongsToMany(Aula::class, 'aula_modulo', 'modulo_id', 'aula_id');
    }

    public function curso(): BelongsTo
    {
        return $this->belongsTo(Curso::class, "curso_id");
    }
}
