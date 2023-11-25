<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perro extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
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
