<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;
    protected $table = 'interaccion';

    protected $fillable = ['perro_interesado', 'perro_candidato', 'preferencia'];


    public function perroInteresado()
    {
        return $this->belongsTo(Perro::class, 'perro_interesado');
    }

    // Relación para obtener el perro candidato en la interacción
    public function perroCandidato()
    {
        return $this->belongsTo(Perro::class, 'perro_candidato');
    }
    
}
