<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;
    protected $table = 'perro';

    protected $fillable = ['nombre', 'url_foto', 'descripcion'];

    public function interaccionesInteresado()
    {
        return $this->hasMany(Interaccion::class, 'perro_interesado');
    }

    public function interaccionesCandidato()
    {
        return $this->hasMany(Interaccion::class, 'perro_candidato');
    }

}
