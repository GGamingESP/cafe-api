<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Especialidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    protected $table = 'especialidades';

    public function Modulo(): HasMany
    {
        return $this->hasMany(Modulo::class);
    }

    public function User(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
